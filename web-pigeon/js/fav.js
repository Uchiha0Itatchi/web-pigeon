/*     ADD TO FAVORITE     */
/*function add_to_fav(element){
    if(element.classList.contains("faved")){
        $(element).removeClass('faved');
        $(element).addClass('not-fav');
    }else{
        $(element).removeClass('not-fav');
        $(element).addClass('faved');
    }
}*/

function add_to_fav(element){
    if(element.classList.contains("faved")){
        element.classList.remove('faved');
        element.classList.add('not-fav');
    }else{
        element.classList.remove('not-fav');
        element.classList.add('faved');
    }
}