<?php

class URL
{
    public $GET = 'GET';
    public $POST = 'POST';
    public $PUT = 'PUT';
    public $PATCH = 'PATCH';
    public $DELETE = 'DELETE';

    public $toggleapi = 'https://toggleapi.herokuapp.com/api/';
    public $addprojectareaURL1 = "buyer-project/";
    public $addprojectareaURL2 = "projectArea/";
    public $getareatypesURL;
    public $getuserURL;
    public $getallprojectsURL;
    public $getboqbyprojectidURL;
    public $updateProjectDetails = "https://toggleapi.herokuapp.com​/api​/buyer-project​/";

    public function __construct()
    {
        $getareatypes = "areatype";
        $getuser = "user";
        $getallprojects = "buyer-project/";
        $getprojectsbyuserid = "buyer-project/userId/";
        $getcompanydetails = "user/companyDetails/";
        $getboqbyprojectid = "boq/project/";
        
        $this->getareatypes = $this->toggleapi . $getareatypes;
        $this->getuserURL = $this->toggleapi . $getuser;
        $this->getallprojectsURL = $this->toggleapi . $getallprojects;
        $this->getareatypesURL = $this->toggleapi . $getareatypes;
        $this->getcompanydetailsURL = $this->toggleapi . $getcompanydetails;
        $this->getboqbyprojectidURL = $this->toggleapi . $getboqbyprojectid;
        $this->getprojectsbyuseridURL = $this->toggleapi . $getprojectsbyuserid;

    }
    public $loginURL =  "https://toggleapi.herokuapp.com/api/user/login";
    public $forgotpasswordURL = "https://toggleapi.herokuapp.com/api/user/forgotPassword";
    public $createuserURL =  "https://toggleapi.herokuapp.com/api/user/signup";
    public $getallusersURL = "https://toggleapi.herokuapp.com/api/user/allUser";

    public $deleteuserURL =  "https://toggleapi.herokuapp.com/api/user/";
    public $updateuserinfoURL =  "https://toggleapi.herokuapp.com/api/user/";
    public $updateuserURL =  "https://toggleapi.herokuapp.com/api/user/updateUser/";
    public $changepasswordURL =  "https://toggleapi.herokuapp.com/api/user/changePassword";
    public $sendemailURL =  "https://toggleapi.herokuapp.com/api/email/send/";
    public $getcountriesURL =  "http://toggleapi.herokuapp.com/api/country";
    public $gettypeURL =  "http://toggleapi.herokuapp.com/api/type";
    public $getproducts =  "https://toggleapi.herokuapp.com/api/product/search";
    public $suggestiveSearch =  "https://toggleapi.herokuapp.com/api/product/";


    public $updatepersonalinfoURL =  "http://toggleapi.herokuapp.com/api/user/personalInfo";
    public $updatecontactinfoURL =  "http://toggleapi.herokuapp.com/api/user/contactInfo";
    public $updatecompanydetailsURL = "http://toggleapi.herokuapp.com/api/user/companyDetails/";

    public $getallproducts =  "http://localhost:3000/api/product/getallproducts";
    public $getproductsbypage =  "http://localhost:3000/api/product/getproductsbypage/";
    public $getproductscount =  "http://localhost:3000/api/product/getproductscount";
    public $getproductbyproductid =  "http://localhost:3000/api/product/getproductbyproductid/";
    public $getproductsbycategoryid =  "http://localhost:3000/api/product/getproductsbycategoryid/";

    public $getAreaTypes = "https://toggleapi.herokuapp.com/api/areatype";
    public $addProject = "https://toggleapi.herokuapp.com/api/buyer-project";

    public $createEvent = "https://toggleapi.herokuapp.com/api/event";
    public $getProjectInterests = "https://toggleapi.herokuapp.com/api/projectinterest";
    public $getEvents = "https://toggleapi.herokuapp.com/api/event";

    public $getProjectDetails = "https://toggleapi.herokuapp.com/api/buyer-project/";

    public function addprojectURL($projectId)
    {
        $this->addprojectareaURL = $this->toggleapi . $this->addprojectareaURL1 . $projectId . "/" . $this->addprojectareaURL2;

        return $this->addprojectareaURL;
    }

    public function getareatypesbyprojectidURL($projectId)
    {

        $this->getareatypesbyprojectidURL = $this->toggleapi . $this->addprojectareaURL1 . $projectId . "/" . $this->addprojectareaURL2;

        return $this->getareatypesbyprojectidURL;
    }
    public $editProject="https://toggleapi.herokuapp.com/api/buyer-project";
    public $getBuyerProjectsByUserId = "https://toggleapi.herokuapp.com/api/buyer-project/userId";
    public $getUserPersonalIno = "https://toggleapi.herokuapp.com/api/user/personalInfo";
    public $getUserContactInfo = "https://toggleapi.herokuapp.com/api/user/contactInfo";
}
