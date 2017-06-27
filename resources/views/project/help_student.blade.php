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
                        <i style="color: black" Student module.></i>
                        Display units for student to register<br>
                        <img src="assets/studentscreenshots2/studentdisplayunits.png"  height="350px" width="880px" >




                        Once the student registers unit, he/she can be graded<br>
                        you will have to log in the system using log in form in order to.<br>View  your results.<br>
                        <img src="assets/studentscreenshots2/studentviewresult.png"  height="350px" width="880px" >
                        NB
                        <b>you must be registered by the admin before you the system</b>.</p>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
