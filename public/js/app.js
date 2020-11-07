$(document).ready(function () {

    $("#mySTDBtn").click(function () {
        $("#mySTDModal").modal();
    });

    //
    $('#cbCountry').on('change', function () {

        var CountryId = $(this).val();

        var Data = "";

        $.ajax({
            type: "get",
            url: '/admin/getcitiesbycountryid',
            dataType: 'json',
            data: {
                'id': CountryId
            },
            success: function (response) {
                Data += '<option value="000" selected>Select</option>';
                for (let index = 0; index < response.length; index++) {
                    Data += '<option value="' + response[index].CC_CityCode + '">' + response[index].CC_CityName + '</option>';
                }
                $('#cbCity').html(Data);
            }
        });

        $.ajax({
            type: "get",
            url: '/admin/getcitiesbycountryid',
            dataType: 'json',
            data: {
                'id': CountryId
            },
            success: function (response) {
                Data += '<option value="000" selected>Select</option>';
                for (let index = 0; index < response.length; index++) {
                    Data += '<option value="' + response[index].CC_CityCode + '">' + response[index].CC_CityName + '</option>';
                }
                $('#cbCity').html(Data);
            }
        });

        $.ajax({
            type: "get",
            url: '/admin/getcitiesbycountryid',
            dataType: 'json',
            data: {
                'id': CountryId
            },
            success: function (response) {
                Data += '<option value="000" selected>Select</option>';
                for (let index = 0; index < response.length; index++) {
                    Data += '<option value="' + response[index].CC_CityCode + '">' + response[index].CC_CityName + '</option>';
                }
                $('#cbCity').html(Data);
            }
        });

        
    });

});
