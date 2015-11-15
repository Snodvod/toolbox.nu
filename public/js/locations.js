$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


$.ajax({
    url: 'https://maps.googleapis.com/maps/api/geocode/json?address=1600+Amphitheatre+Parkway,+Mountain+View,+CA&key=AIzaSyAZTmMsEewug2nH9mtFTCQmsLI37KcglSM'
}).done(function (data) {
    console.log(data);
});


$.ajax({
    type: 'POST',
    url: 'location',
    data: {lat: lat, lng: lng},
})