$('document').ready( function() {
	done();
});
function done() {
	setTimeout(function() { 
	updates();
	done();
	}
	, 200 );
}
function updates(){	
	$.getJSON( "read.php", function (data){
		
		$(".t1").empty();
		$(".t2").empty();
		$(".t3").empty();
		$(".t4").empty();
		
		$(".t1").append("<tr><td>Id: </td><td>Titlu: </td><td>Descriere: </td></tr>");
		$(".t2").append("<tr><td>Id: </td><td>Categoriy id: </td><td>Titlu: </td><td>Descriere: </td></tr>");
		$(".t3").append("<tr><td>Id: </td><td>Titlu: </td><td>Latitudine: </td><td>Longitudine: </td><td>Numar de telefon: </td><td>Descriere: </td></tr>");
		$(".t4").append("<tr><td>Id: </td><td>Interest_point_id: </td><td>Pret: </td><td>Data: </td></tr>");
		
		
		$.each(data.array, function () {
			$(".t1").append("<tr><td>"+this['id']+"</td><td>"+this['title']+"</td><td>"+this['describtion']+"</td></tr>");
		});
		$.each(data.array1, function () {
			$(".t2").append("<tr><td>"+this['id']+"</td><td>"+this['category_id']+"</td><td>"+this['title']+"</td><td>"+this['describtion']+"</td></tr>");
		});
	    $.each(data.array2, function () {
			$(".t3").append("<tr><td>"+this['id']+"</td><td>"+this['title']+"</td><td>"+this['location_latitude']+"</td><td>"+this['location_longitude']+"</td><td>"+this['phone_number']+"</td><td>"+this['describtion']+"</td></tr>");
		});
	    $.each(data.array3, function () {
			$(".t4").append("<tr><td>"+this['id']+"</td><td>"+this['interest_point_id']+"</td><td>"+this['price']+"</td><td>"+this['event1_time']+"</td></tr>");
		});
	});
}