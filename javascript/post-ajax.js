$.post( "ajax/test.html",{email:email},function( data ) {
	$( ".result" ).html( data );
});