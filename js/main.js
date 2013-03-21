/*-----------------------------------------------------------------------------------

  Isotope centered masonry

-----------------------------------------------------------------------------------*/

 $.Isotope.prototype._getCenteredMasonryColumns = function() {
    this.width = this.element.width();
    
    var parentWidth = this.element.parent().width();
    
                  // i.e. options.masonry && options.masonry.columnWidth
    var colW = this.options.masonry && this.options.masonry.columnWidth ||
                  // or use the size of the first item
                  this.$filteredAtoms.outerWidth(true) ||
                  // if there's no items, use size of container
                  parentWidth;
    
    var cols = Math.floor( parentWidth / colW );
    cols = Math.max( cols, 1 );

    // i.e. this.masonry.cols = ....
    this.masonry.cols = cols;
    // i.e. this.masonry.columnWidth = ...
    this.masonry.columnWidth = colW;
  };
  
  $.Isotope.prototype._masonryReset = function() {
    // layout-specific props
    this.masonry = {};
    // FIXME shouldn't have to call this again
    this._getCenteredMasonryColumns();
    var i = this.masonry.cols;
    this.masonry.colYs = [];
    while (i--) {
      this.masonry.colYs.push( 0 );
    }
  };

  $.Isotope.prototype._masonryResizeChanged = function() {
    var prevColCount = this.masonry.cols;
    // get updated colCount
    this._getCenteredMasonryColumns();
    return ( this.masonry.cols !== prevColCount );
  };
  
  $.Isotope.prototype._masonryGetContainerSize = function() {
    var unusedCols = 0,
        i = this.masonry.cols;
    // count unused columns
    while ( --i ) {
      if ( this.masonry.colYs[i] !== 0 ) {
        break;
      }
      unusedCols++;
    }
    
    return {
          height : Math.max.apply( Math, this.masonry.colYs )+20,
          // fit container to columns that have been used;
          width : (this.masonry.cols - unusedCols) * this.masonry.columnWidth
        };
  };


$(function(){

/*-----------------------------------------------------------------------------------

  Isotope Filtering

-----------------------------------------------------------------------------------*/
	var items = []; // Declare item array up here so our custom function can use it as well as doc-ready stuff
	var currentFilter = {
		"pagination" : '[data-pagination="1"]'
	};
	$('#nightclubs-list').select2({
		placeholder: "Select a NightClub"
	});
	$('#hashtags').select2({
		placeholder: "Pick hastags",
	    minimumInputLength: 1,
	    multiple: true,
	    tags: [],
	    ajax: { // instead of writing the function to execute the request we use Select2's convenient helper
	        url: "../ajax/hashtag.json",
	        dataType: 'json',
	        data: function (term, page) {
	            return {
	                q: term // search term
	            };
	        },
	        results: function (data) { // parse the results into the format expected by Select2.
	            // since we are using custom formatting functions we do not need to alter remote JSON data
	            return {results: data.hashtags};
	        }
	    }
	});
	/*$( "#datepicker" ).datepicker({ 
		dateFormat: "dd/mm/yy",
		altFormat: "dd/mm/yy",
		onSelect: function(dateText) {
			isotopeSearch();
		}
	});*/

	function concatFilter(json){
		var result = ".result-item";
		result+=json.pagination;
		return result;
	}

	/**
	 * Function takes single keyword as argument,
	 * checks array of item objects and looks for substring matches between item.name and keyword,
	 * if matches are found calls isotope.filter() function on our collection.
	 */
	function isotopeSearch()
	{
	        // reset results arrays
	        var matches = [];
	        var misses = [];
	        var date = null;
/*	        var date = $.datepicker.formatDate("dd/mm/yy", $("#datepicker").datepicker("getDate"));
*/	        
			var hashtagsVal = $('#hashtags').val();
			var hashtagsArray = hashtagsVal.split(",");
			var locationsArray = $('#nightclubs-list').val();
	        var $matches;

	        $('#noMatches').hide(); // ensure this is always hidden when we start a new query

	        console.log(hashtagsVal.length, hashtagsVal, hashtagsVal != "");

	        if ( hashtagsVal.length ) { // if at least one hashtag is set:
	                
	                // loop through items array 
	                $('.result-item').each(function(index, item){
	                	var hashs = $(item).attr('data-hashtags').split(",");
	                	var foundAWrongHash = false;
	                	$.each(hashtagsArray, function(i, v){
	                		if($.inArray(v, hashs) == -1 || foundAWrongHash == true){
	                			foundAWrongHash = true;
	                		}
	                	});
	                	if (foundAWrongHash == false)
	                		matches.push( item );
	                });

	                // add appropriate classes and call isotope.filter
	                $matches = $(matches);
	                
	        } else {
	                // show all if keyword less than 2 chars
	                $matches = $(".result-item");
	        }

	        if(locationsArray!=null && locationsArray.length){
	          
	          var secondMatch = [];

	          $.each(locationsArray, function(index, item){
	            $matches.each(function(i, v){
	              if($(v).attr('data-location') == item)
	                secondMatch.push($(v)[0]);
	            });
	          });

	          $matches = $(secondMatch);

	        }

	        if(!$matches.length){
	        	$('#noMatches').show();
	        }

	        paginate($matches);
	        $('#results').isotope({ filter: concatFilter(currentFilter) });

	}

	var nbCols = 2;

	function paginate($items){

	  var nbItemsByPage = Math.floor((Math.min($(window).width(), 960)-20)/220)*nbCols;

		$('.result-item').attr("data-pagination", "0");
		$('#results-pagination').empty().append('<li data-page-num="1" class="results-page"><a href="#">1</a></li>');
		var i = 0;
		var j = 1;
		$items.each(function(index, item){
			if(i == nbItemsByPage){
				i=0;
				j++;
				$('#results-pagination').append('<li data-page-num="'+j+'" class="results-page"><a href="#">'+j+'</a></li>');
			}
			i++;
			$(item).attr("data-pagination", ""+j+"");
		});
		$('.results-page').first().click();
	}


	$(window).resize(function(){
	  isotopeSearch();
	});

	$('#results').isotope({
	  	// options
		itemSelector : '.result-item',
		filter: '[data-pagination="1"]'
	});

	$(document).on('click', 'li.results-page', function(e){
		var $t = $(this);
		$('#results-pagination').find('li.active').removeClass('active');
		$t.addClass('active');
		currentFilter.pagination = '[data-pagination="' + $t.attr('data-page-num') + '"]';
		e.preventDefault();
		$('#results').isotope({ filter: concatFilter(currentFilter) });
	});

	$('.result-item-map-button').on('click', function(e){
		var $t = $(this);
		$t.parents('.result-item').addClass('show-map');
		e.preventDefault();
	});

	$('.result-item-picture-button').on('click', function(e){
		var $t = $(this);
		$t.parents('.result-item').removeClass('show-map');
		e.preventDefault();
	});

	// stick items into array declared above as a series of objects
	// we could include more than just the name in here, to build up a bigger search 'index'
	$('.result-item-name').each(function(){
	      var tmp = {};
	      tmp.id = $(this).parents('.result-item').attr('id');
	      tmp.name = ($(this).text().toLowerCase());
	      items.push( tmp );
	});
	      
	// User types in search box - call our search function and supply lower-case keyword as argument
	$('#search').bind('keyup', function() {
	      isotopeSearch();
	});

	$('#nightclubs-list').on('change', function(e){
		isotopeSearch();
		e.preventDefault();
	});

	$('#hashtags').on('change', function(e){
		isotopeSearch();
		e.preventDefault();
	});

	// First paginate
	paginate($(".result-item"));


/*-----------------------------------------------------------------------------------

  Signup stuff

-----------------------------------------------------------------------------------*/
	$("#signup").submit(function(){
		var email = $('#signup [name="email"]').val();
		
		var str = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "../php/signup.php",
			data: str,
			success: function(result){
				if (result=='ok'){
					document.getElementById("email").innerHTML='';
					window.alert("Success! Will email you when ITN is ready.");
				}
				else{
					alert(result);
				}
			}
		});
		
		document.getElementById("email").onfocus=function(){
			document.getElementById("email").innerHTML=''
		};
		return false;	
	});

});

/*-----------------------------------------------------------------------------------

  Twitter

-----------------------------------------------------------------------------------*/
$(function() {
	function m(n, d) {
		P = Math.pow;
		R = Math.round
		d = P(10, d);
		i = 7;
		while(i) {
			(s = P(10, i-- * 3)) <= n && (n = R(n * d / s) / d + "KMGTPE"[i])
		}
		return n;
	}

	$.ajax({
		url: 'http://api.twitter.com/1/users/show.json',
		data: {
			screen_name: 'intothisnight'
		},
		dataType: 'jsonp',
		success: function(data) {
		   count = data.followers_count;
		   $('#followers').html(m(count, 1));
		}
	});
});

/*-----------------------------------------------------------------------------------

  Elastislide

-----------------------------------------------------------------------------------*/

$( '.carousel' ).elastislide( {
    minItems : 4
  } );

/*-----------------------------------------------------------------------------------

  Feedback form reply target to iframe

-----------------------------------------------------------------------------------*/

if($('#feedbackfrm').length){

	function init() {
		document.getElementById('feedbackfrm').onsubmit=function() {
			document.getElementById('feedbackfrm').target = 'upload_target';
		};
	};
	window.onload=init;
}

