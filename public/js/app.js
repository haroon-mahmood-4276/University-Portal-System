$(document).ready(function () {

    $("#mySTDBtn").click(function () {
        $("#mySTDModal").modal();
        GetCountries();
        GetSchools();
    });

    $("#myTCHRBtn").click(function () {
        $("#myTCHRModal").modal();
        GetCountries();
        GetSchools();
    });

    $("#myProgramBtn").click(function () {
        $("#myProgramModal").modal();
    });

    $("#mySchoolBtn").click(function () {
        $("#mySchoolModal").modal();
    });

    //
    function GetCountries() {

        var Data = "";

        $.ajax({
            type: "get",
            url: '/api/countries',
            dataType: 'json',
            success: function (response) {
                Data += '<option value="000" selected>Select</option>';
                for (let index = 0; index < response.length; index++) {
                    Data += '<option value="' + response[index].CC_CntryCode + '">' + response[index].CC_CntryName + '</option>';
                }
                $('#cbCountry').html(Data);
            }
        });
    };

    function GetSchools() {

        var Data = "";

        $.ajax({
            type: "get",
            url: '/api/schools',
            dataType: 'json',
            success: function (response) {
                Data += '<option value="000" selected>Select</option>';
                for (let index = 0; index < response.length; index++) {
                    Data += '<option value="' + response[index].SCL_SchoolCode + '">' + response[index].SCL_SchoolName + ' ( ' + response[index].SCL_SchoolAbb + ' )' + '</option>';
                }
                $('#cbSchool').html(Data);
            }
        });
    };


    $('#cbCountry').on('change', function () {

        var CountryId = $(this).val();

        var Data = "";

        $.ajax({
            type: "get",
            url: '/api/countries/' + CountryId + '/cities',
            dataType: 'json',
            success: function (response) {
                Data += '<option value="000" selected>Select</option>';
                for (let index = 0; index < response.length; index++) {
                    Data += '<option value="' + response[index].CC_CityCode + '">' + response[index].CC_CityName + '</option>';
                }
                $('#cbCity').html(Data);
            }
        });
    });

    $('#cbSchool').on('change', function () {

        var SchoolId = $(this).val();

        var Data = "";

        $.ajax({
            type: "get",
            url: '/api/schools/' + SchoolId + '/programs',
            dataType: 'json',
            success: function (response) {
                Data += '<option value="000" selected>Select</option>';
                for (let index = 0; index < response.length; index++) {
                    Data += '<option value="' + response[index].PRG_PCode + '">' + response[index].PRG_ProgramName + '</option>';
                }
                $('#cbprogram').html(Data);
            }
        });
    });

    $('#cbprogram').on('change', function () {

        var ProgramId = $(this).val();

        var Data = "";

        $.ajax({
            type: "get",
            url: '/api/programs/' + ProgramId + '/sections',
            dataType: 'json',
            success: function (response) {
                Data += '<option value="000" selected>Select</option>';
                for (let index = 0; index < response.length; index++) {
                    Data += '<option value="' + response[index].PRG_SCode + '">' + response[index].PRG_SectionName + '</option>';
                }
                $('#cbSection').html(Data);
            }
        });
    });

    $("#myInput").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
    });

});
