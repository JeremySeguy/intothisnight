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
	        var kwd = $('#search').val().toLowerCase();
	        var locationsArray = [];
	        var $matches

	        $('#location').find('.locations').find('li.selected').each(function(index, value){
	          locationsArray.push($(this).attr('data-id'));
	        });

	        $('#noMatches').hide(); // ensure this is always hidden when we start a new query

	        if ( (kwd != '') && (kwd.length >= 2) ) { // min 2 chars to execute query:
	                
	                // loop through items array             
	                $.each(items, function(index, item){
	                        if ( item.name.indexOf(kwd) !== -1 ) { // keyword matches element
	                                matches.push( $('#'+item.id)[0] );
	                        } else {
	                                misses.push( $('#'+item.id)[0] );
	                        }
	                });

	                // add appropriate classes and call isotope.filter
	                $matches = $(matches);

	                if (matches.length == 0) {
	                        $('#noMatches').show(); // deal with empty results set
	                }
	                
	        } else {
	                // show all if keyword less than 2 chars
	                $matches = $(".result-item");
	        }

	        if($('#location').find('.locations').find('li.selected').length){
	          
	          var secondMatch = [];

	          $.each(locationsArray, function(index, item){
	            $matches.each(function(i, v){
	              if($(v).attr('data-location') == item)
	                secondMatch.push($(v)[0]);
	            });
	          });

	          $matches = $(secondMatch);

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


	// Locations
	$('#location').on('click', function(e){
	      var $t = $(this);
	      $t.find('.locations').toggle();
	      $t.toggleClass('selected');
	      e.stopPropagation();
	});

	$(document).on('click', function(){
	$('.locations').hide();
	$('#location').removeClass('selected');
	});

	$('#location').find('.locations').find('li').on('click', function(e){
	$(this).toggleClass('selected');
	var nb = $('#location').find('.locations').find('li.selected').length;
	$('#location').find('span').first().text((nb > 0) ? (nb + " Location" + ((nb > 1) ? "s" : "")) : "All locations");
	isotopeSearch();
	//e.stopPropagation();
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
