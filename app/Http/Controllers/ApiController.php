<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UPMSCityCountry;
use App\Models\UPMSPrograms;
use App\Models\UPMSSchools;

class ApiController extends Controller
{
    public function GetCountries()
    {
        $Country = UPMSCityCountry::select('CC_CntryCode', 'CC_CntryName')->distinct()->get();
        return response()->json($Country);
    }

    public function GetCitiesByCountryId($id)
    {
        $City = UPMSCityCountry::select('CC_CityCode', 'CC_CityName')->where('CC_CntryCode', $id)->orderBy('CC_CityName')->get();
        return response()->json($City);
    }

    public function GetSchools()
    {
        return response()->json(UPMSSchools::all());
    }

    public function GetProgramBySchoolId($id)
    {
        $Program = UPMSPrograms::select('PRG_PCode', 'PRG_ProgramName')->where('PRG_SCLSchoolCode', $id)->orderBy('PRG_ProgramName')->get();
        return response()->json($Program);
    }

    public function GetSectionByProgramId($id)
    {
        $Section = UPMSPrograms::select('PRG_SCode', 'PRG_SectionName')->where('PRG_PCode', $id)->orderBy('PRG_SectionName')->get();
        return response()->json($Section);
    }
}