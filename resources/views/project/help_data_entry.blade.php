@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">help is here no need to worry</div>
                    <h1>GETTING STARTED</h1>
                   <p>Getting Started section explains how to use online results monitoring system. The section presents briefly system menu.<br>
                       Log in<br>
                       you have to input your email address –for which you gave during the registration process, and your password before clicking the log in button.<br>
                       Ticking the remember me will enable the specified user on that specific browser not to be asked to log in again, another time.<br>
                   </p>
                    <img src="assets/studentscreenshots2/loginpage.png"  height="350px" width="880px" >
                    Figure 1:Log In Page

                    <p>A successful Log in will land the user in the Homepage Dashboard, which will vary slightly, depending on the user type.<br>
                        An unsuccessful log in will prompt you to check your inputs and try again.
                        <br>A suspended user, once he tries to log in, or even if he/she was logged into the system prior to suspension, will be redirected to the suspension page.<br>
                        <i style="color: black">Academic-advisor module</i> <br>
                    Academic advisor is the same as lecturer whereby he/she has access to the students registered for the units he/she is assigned.<br>
                        <img src="assets/academic_advisor screenshots/academic_advisorunitsassigned.png"  height="350px" width="880px" >
                    Upon click on the right most button, the students registered for this unit are displayed.<br>
                        Then the academic advisor comments on that unit.<br>
                        <img src="assets/academic_advisor screenshots/academic_advisorcomment.png"  height="350px" width="880px" >






                    NB
                        <b>you must be registered by the admin before you the system</b>.</p>
                    </div>
                </div>
            </div>
        </div>
   </div>
@endsection
