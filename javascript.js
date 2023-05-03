

function generatePhotography(){
    for( i in images){
        document.write(
           
            '<article class="photograph">'+
                '<div>'+
                    '<h2 class="imageName">' + images[i].imageName +'</h2>'+
                    '<img src="images/'+ images[i].type +'/'+images[i].url +'"/>'+  
                '</div>'+
                '<div>'+ 
                    '<h3 class="imageDesc">'+ images[i].description + '</h3>'+
                '</div>'+

            '</article>'


        );
    }
}

