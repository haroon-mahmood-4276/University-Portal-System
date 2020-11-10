$(document).ready(function () {

    $("#mySTDBtn").click(function () {
        $("#mySTDModal").modal();
    });

    $("#myTCHRBtn").click(function () {
        $("#myTCHRModal").modal();
    });

    $("#myProgramBtn").click(function () {
        $("#myProgramModal").modal();
    });

    $("#mySchoolBtn").click(function () {
        $("#mySchoolModal").modal();
    });

    //
    $('#cbCountry').on('change', function () {

        var CountryId = $(this).val();

        var Data = "";

        $.ajax({
            type: "get",
            url: '/admin/GetCitiesByCountryId',
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

    $('#cbSchool').on('change', function () {

        var SchoolId = $(this).val();

        var Data = "";

        $.ajax({
            type: "get",
            url: '/admin/GetProgramBySchoolId',
            dataType: 'json',
            data: {
                'id': SchoolId
            },
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
            url: '/admin/GetSectionByProgramId',
            dataType: 'json',
            data: {
                'id': ProgramId
            },
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
