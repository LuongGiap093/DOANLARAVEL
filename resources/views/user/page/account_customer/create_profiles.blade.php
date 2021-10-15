@extends('user.theme.layout')
@section('content')
    <div class="container">
        <h1>Edit Profile</h1>
        <hr>
        <div class="row">
            <!-- left column -->
            <div class="col-md-3">
                <div class="text-center">
                    <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
                    <h6>Upload a different photo...</h6>

                    <input type="file" class="form-control">
                </div>
            </div>

            <!-- edit form column -->
            <div class="col-md-9 personal-info">
                <div class="alert alert-info alert-dismissable">
                    <a class="panel-close close" data-dismiss="alert">×</a>
                    <i class="fa fa-coffee"></i>
                    This is an <strong>.alert</strong>. Use this to show important messages to the user.
                </div>
                <h3>Personal info</h3>

                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label class="col-lg-3 control-label">First name:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" value="Jane">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Last name:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" value="Bishop">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Company:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Email:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" value="janesemail@gmail.com">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Time Zone:</label>
                        <div class="col-lg-8">
                            <div class="ui-select">
                                <select id="user_time_zone" class="form-control">
                                    <option value="Hawaii">(GMT-10:00) Hawaii</option>
                                    <option value="Alaska">(GMT-09:00) Alaska</option>
                                    <option value="Pacific Time (US &amp; Canada)">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                                    <option value="Arizona">(GMT-07:00) Arizona</option>
                                    <option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
                                    <option value="Central Time (US &amp; Canada)" selected="selected">(GMT-06:00) Central Time (US &amp; Canada)</option>
                                    <option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
                                    <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Username:</label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" value="janeuser">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Password:</label>
                        <div class="col-md-8">
                            <input class="form-control" type="password" value="11111122333">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Confirm password:</label>
                        <div class="col-md-8">
                            <input class="form-control" type="password" value="11111122333">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-8">
                            <input type="button" class="btn btn-primary" value="Save Changes">
                            <span></span>
                            <input type="reset" class="btn btn-default" value="Cancel">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <hr>

{{--    <div class="container bootstrap snippet">--}}
{{--        <div class="row">--}}
{{--            <div class="col-sm-10"><h1>User name</h1></div>--}}
{{--            <div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="http://www.gravatar.com/avatar/28fd20ccec6865e2d5f0e1f4446eb7bf?s=100"></a></div>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-sm-3"><!--left col-->--}}


{{--                <div class="text-center">--}}
{{--                    <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">--}}
{{--                    <h6>Upload a different photo...</h6>--}}
{{--                    <input type="file" class="text-center center-block file-upload">--}}
{{--                </div></hr><br>--}}


{{--                <div class="panel panel-default">--}}
{{--                    <div class="panel-heading">Website <i class="fa fa-link fa-1x"></i></div>--}}
{{--                    <div class="panel-body"><a href="http://bootnipets.com">bootnipets.com</a></div>--}}
{{--                </div>--}}


{{--                <ul class="list-group">--}}
{{--                    <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>--}}
{{--                    <li class="list-group-item text-right"><span class="pull-left"><strong>Shares</strong></span> 125</li>--}}
{{--                    <li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span> 13</li>--}}
{{--                    <li class="list-group-item text-right"><span class="pull-left"><strong>Posts</strong></span> 37</li>--}}
{{--                    <li class="list-group-item text-right"><span class="pull-left"><strong>Followers</strong></span> 78</li>--}}
{{--                </ul>--}}

{{--                <div class="panel panel-default">--}}
{{--                    <div class="panel-heading">Social Media</div>--}}
{{--                    <div class="panel-body">--}}
{{--                        <i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i class="fa fa-google-plus fa-2x"></i>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div><!--/col-3-->--}}
{{--            <div class="col-sm-9">--}}
{{--                <ul class="nav nav-tabs">--}}
{{--                    <li class="active"><a data-toggle="tab" href="#home">home</a></li>--}}
{{--                    <li><a data-toggle="tab" href="#messages">Menu 1</a></li>--}}
{{--                    <li><a data-toggle="tab" href="#settings">Menu 2</a></li>--}}
{{--                </ul>--}}


{{--                <div class="tab-content">--}}
{{--                    <div class="tab-pane active" id="home">--}}
{{--                        <hr>--}}
{{--                        <form class="form" action="##" method="post" id="registrationForm">--}}
{{--                            <div class="form-group">--}}

{{--                                <div class="col-xs-6">--}}
{{--                                    <label for="first_name"><h4>First name</h4></label>--}}
{{--                                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}

{{--                                <div class="col-xs-6">--}}
{{--                                    <label for="last_name"><h4>Last name</h4></label>--}}
{{--                                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group">--}}

{{--                                <div class="col-xs-6">--}}
{{--                                    <label for="phone"><h4>Phone</h4></label>--}}
{{--                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group">--}}
{{--                                <div class="col-xs-6">--}}
{{--                                    <label for="mobile"><h4>Mobile</h4></label>--}}
{{--                                    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}

{{--                                <div class="col-xs-6">--}}
{{--                                    <label for="email"><h4>Email</h4></label>--}}
{{--                                    <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}

{{--                                <div class="col-xs-6">--}}
{{--                                    <label for="email"><h4>Location</h4></label>--}}
{{--                                    <input type="email" class="form-control" id="location" placeholder="somewhere" title="enter a location">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}

{{--                                <div class="col-xs-6">--}}
{{--                                    <label for="password"><h4>Password</h4></label>--}}
{{--                                    <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}

{{--                                <div class="col-xs-6">--}}
{{--                                    <label for="password2"><h4>Verify</h4></label>--}}
{{--                                    <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password2.">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <div class="col-xs-12">--}}
{{--                                    <br>--}}
{{--                                    <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>--}}
{{--                                    <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </form>--}}

{{--                        <hr>--}}

{{--                    </div><!--/tab-pane-->--}}
{{--                    <div class="tab-pane" id="messages">--}}

{{--                        <h2></h2>--}}

{{--                        <hr>--}}
{{--                        <form class="form" action="##" method="post" id="registrationForm">--}}
{{--                            <div class="form-group">--}}

{{--                                <div class="col-xs-6">--}}
{{--                                    <label for="first_name"><h4>First name</h4></label>--}}
{{--                                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}

{{--                                <div class="col-xs-6">--}}
{{--                                    <label for="last_name"><h4>Last name</h4></label>--}}
{{--                                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group">--}}

{{--                                <div class="col-xs-6">--}}
{{--                                    <label for="phone"><h4>Phone</h4></label>--}}
{{--                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group">--}}
{{--                                <div class="col-xs-6">--}}
{{--                                    <label for="mobile"><h4>Mobile</h4></label>--}}
{{--                                    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}

{{--                                <div class="col-xs-6">--}}
{{--                                    <label for="email"><h4>Email</h4></label>--}}
{{--                                    <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}

{{--                                <div class="col-xs-6">--}}
{{--                                    <label for="email"><h4>Location</h4></label>--}}
{{--                                    <input type="email" class="form-control" id="location" placeholder="somewhere" title="enter a location">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}

{{--                                <div class="col-xs-6">--}}
{{--                                    <label for="password"><h4>Password</h4></label>--}}
{{--                                    <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}

{{--                                <div class="col-xs-6">--}}
{{--                                    <label for="password2"><h4>Verify</h4></label>--}}
{{--                                    <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password2.">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <div class="col-xs-12">--}}
{{--                                    <br>--}}
{{--                                    <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>--}}
{{--                                    <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </form>--}}

{{--                    </div><!--/tab-pane-->--}}
{{--                    <div class="tab-pane" id="settings">--}}


{{--                        <hr>--}}
{{--                        <form class="form" action="##" method="post" id="registrationForm">--}}
{{--                            <div class="form-group">--}}

{{--                                <div class="col-xs-6">--}}
{{--                                    <label for="first_name"><h4>First name</h4></label>--}}
{{--                                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}

{{--                                <div class="col-xs-6">--}}
{{--                                    <label for="last_name"><h4>Last name</h4></label>--}}
{{--                                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group">--}}

{{--                                <div class="col-xs-6">--}}
{{--                                    <label for="phone"><h4>Phone</h4></label>--}}
{{--                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group">--}}
{{--                                <div class="col-xs-6">--}}
{{--                                    <label for="mobile"><h4>Mobile</h4></label>--}}
{{--                                    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}

{{--                                <div class="col-xs-6">--}}
{{--                                    <label for="email"><h4>Email</h4></label>--}}
{{--                                    <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}

{{--                                <div class="col-xs-6">--}}
{{--                                    <label for="email"><h4>Location</h4></label>--}}
{{--                                    <input type="email" class="form-control" id="location" placeholder="somewhere" title="enter a location">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}

{{--                                <div class="col-xs-6">--}}
{{--                                    <label for="password"><h4>Password</h4></label>--}}
{{--                                    <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}

{{--                                <div class="col-xs-6">--}}
{{--                                    <label for="password2"><h4>Verify</h4></label>--}}
{{--                                    <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password2.">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <div class="col-xs-12">--}}
{{--                                    <br>--}}
{{--                                    <button class="btn btn-lg btn-success pull-right" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>--}}
{{--                                    <!--<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>-->--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}

{{--                </div><!--/tab-pane-->--}}
{{--            </div><!--/tab-content-->--}}

{{--        </div><!--/col-9-->--}}
{{--    </div><!--/row-->--}}

@endsection
