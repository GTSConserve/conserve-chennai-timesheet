<div>
   
    @if($status==0)
   
    <div class="container-fluid" style="max-width: 1200px">
        <div class="row">
            <div class="col-sm-12"
                style="background: rgb(167, 229, 248);box-shadow: 2px 4px 12px rgba(0, 0, 0, 0.08);border-radius: 18px;margin: 0px 0;padding: 14px;">
                <img src="{{asset('assets/icon/mick.png')}}" style="background: linear-gradient(180deg, #2CEEFD 0%, #1AA6D5 100%);border-radius: 42px;padding: 10px;float: left;margin-top: 0px;margin-right: 15px;">

                    @if ($controls)
                        @foreach($controls as $control)
                            <p style="margin-bottom: 0;">{{$control->announcement}}</p>
                        @endforeach
                    @endif
            </div>
            {{-- <div class="col-sm-2">
                <div class="row">
                    <div class="col-4 p-1" style="margin: 32px 0;">
                        <div class=""
                            style="background: linear-gradient(180deg, #2AE6F9 0%, #0DAADD 100%);box-shadow: 2px 4px 12px rgba(0, 0, 0, 0.08);border-radius: 13px;margin: 10px 0;height:50px;">
                            <a title="Check Your payout" href="invoice.php"><img src="../img/pay_slip.png"
                                    class=""
                                    style="width:25px;height:25px;margin-left:11px;margin-top:11px;"></a>
                        </div>
                    </div>
                    <div class="col-4 p-1" style="margin: 32px 0;">
                        <div class=""
                            style="background: linear-gradient(180deg, #2AE6F9 0%, #0DAADD 100%);box-shadow: 2px 4px 12px rgba(0, 0, 0, 0.08);border-radius: 13px;margin: 10px 0;height: 50px;">
                            <a title="Gallery" href="invoice.php"><img src="img/gallery.png"
                                    style="width:25px;height:25px;margin-left:11px;margin-top:11px;"></a>
                        </div>
                    </div>
                    <div class="col-4 p-1" style="margin: 32px 0;">
                        <div class=""
                            style="background: linear-gradient(180deg, #2AE6F9 0%, #0DAADD 100%);box-shadow: 2px 4px 12px rgba(0, 0, 0, 0.08);border-radius: 13px;margin: 10px 0;height: 50px;">
                            <a title="Video" href="invoice.php"><img src="img/video.png"
                                    style="width:25px;height:25px;margin-left:11px;margin-top:11px;"></a>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="name-sec" style="background:linear-gradient(180deg, rgb(255, 214, 214) 0%, #fab4af 100%);box-shadow: 2px 8px 12px rgba(244, 67, 54, 0.3);border-radius: 18px;margin: 10px 0;height: 300px;padding: 14px;">
                    <div class="p-2">
                        <p style="background: #FFFFFF;border: 1px solid #f7675c;border-radius: 90px;padding:8px;">
                            <img src="{{asset('assets/icon/skillings.png')}}" alt=""style="height:30px;">&nbsp<b>Skillings</b>
                        </p>
                        @if ($skillings)
                            @foreach ($skillings as $skilling)
                                <div class="mx-1" style="margin-top: -10px;">
                                    <div class="row">
                                        <div class="col-9">
                                            <p style="font-size:12px;margin-bottom: 10px; line-height:2em;">
                                                {{$skilling->title}}@if ($skilling->status == 1)
                                                <img style="height:20px;"src="https://gglonline.net/wp-content/uploads/2018/10/new-gif-image-6.gif" alt="New">
                                                @endif
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <p><span style="float: right;font-size:10px;">{{$skilling->date}}</span></p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="name-sec"
                    style="background:linear-gradient(180deg, #fdeab0 100%, #ffe083 100%);box-shadow: 2px 8px 12px rgba(255, 191, 0, 0.3);border-radius: 18px;margin: 10px 0;height: 300px;padding: 14px;">
                    <div class="p-2">
                        <p style="background: #FFFFFF;border: 1px solid #FFC107;border-radius: 90px;padding:8px;">
                            <img src="{{asset('assets/icon/new_project.png')}}" alt=""style="height:30px;">&nbsp<b>Latest Projects</b></p>
                        @if ($latest_projects)
                            @foreach ($latest_projects as $latest_project)
                                <div class="mx-1" style="margin-top: -10px;">
                                    <div class="row">
                                        <div class="col-9">
                                            <p style="font-size:12px;margin-bottom: 10px; line-height:2em;">
                                                {{$latest_project->title}}@if ($latest_project->status == 1)
                                                <img style="height:20px;"src="https://gglonline.net/wp-content/uploads/2018/10/new-gif-image-6.gif" alt="New">
                                                @endif
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <p><span style="float: right;font-size:10px;">{{$latest_project->date}}</span></p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="name-sec"
                    style="background:linear-gradient(180deg, #e5c8ff 100%, #E6CCFF 100%);box-shadow: 2px 8px 12px rgba(155, 81, 224, 0.3);border-radius: 18px;margin: 10px 0;height: 300px;padding: 14px;">
                    <div class="p-2">
                        <p style="background: #FFFFFF;border: 1px solid #9B51E0;border-radius: 90px;padding:8px;">
                            <img src="{{asset('assets/icon/hapaning.png')}}" alt=""style="height:30px;">&nbsp<b>Conserve
                                Happenings</b>
                        </p>
                        @if ($happenings)
                            @foreach ($happenings as $happening)
                                <div class="mx-1" style="margin-top: -10px;">
                                    <div class="row">
                                        <div class="col-9">
                                            <p style="font-size:12px;margin-bottom: 10px; line-height:2em;">
                                                {{$happening->title}}@if ($happening->status == 1)
                                                <img style="height:20px;"src="https://gglonline.net/wp-content/uploads/2018/10/new-gif-image-6.gif" alt="New">
                                                @endif
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <p><span style="float: right;font-size:10px;">{{$happening->date}}</span></p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <!-- left side -->
                <div class="row">
                    <div class="col-12">
                        <div class="name-sec"
                            style="background: linear-gradient(180deg, #2DF1FF 0%, #19A1D2 100%);box-shadow: 0px 2px 12px rgba(0, 0, 0, 0.08);border-radius: 18px;margin: 10px 0;height: 80px;padding: 14px;">
                            <label for=""
                                style="margin-bottom: 0;color:#fff;font-size: 14px;font-family: Segoe UI !important;">

                                @if($time_status == 1)
                                {{'Good Afternoon !'}}
                                @else
                                {{'Good Morning !'}}
                                @endif</label>
                            <p for=""
                                style="color:white;font-size: 18px;font-weight: 600;font-family: Segoe UI !important;">
                                {{Auth::user()->name}}</label></p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="name-sec"
                            style="background:#cceffc;border-radius: 18px;margin: 10px 0;min-height: 632px;padding: 14px;box-shadow: 2px 4px 12px rgba(0, 0, 0, 0.08);">
                            <p
                                style="background:linear-gradient(180deg, #3EC5F5 0%, #6CD4FA 100%);border-radius:50px;width:70%;text-align:left;color:#fff;padding-left:10px;height:30px;margin:5px;">
                                <b>Thought of the day</b></p>
                            <div class="p-1" style="padding-left:10px;">
                                <h3 style="font-size:14px;color:#2D9CDB"><b>Engineering</b></h3>
                                @foreach($controls as $control)
                                <p style="font-size:14px;">
                                        “{{$controls[0]->engineering_quote}}"

                                </p>
                                @endforeach
                                <h3 style="font-size:14px;color:#2D9CDB"><b>Ethics</b></h3>
                                @foreach($controls as $control)
                                <p style="font-size:14px;">
                                        “{{$control->ethics_quote}}"
                                </p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!-- left side -->
            </div>
            <div class="col-sm-8">
                <!-- right -->
                <div class="row">
                    <img src="{{asset('assets/icon/conserve_map.gif')}}" alt="" style="height: 380px;width:98%;padding-left:15px;margin-top:7px;">
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="name-sec"
                            style="background:linear-gradient(180deg, #fdd4c2 100% 0%, #ff6523 100%);box-shadow: 2px 8px 12px rgba(181, 98, 63, 0.5);border-radius: 18px;margin: 10px 0;height: 200px;padding: 14px;">
                            <div class="" style="padding:5px;">
                                <P><img src="{{asset('assets/icon/hiring.png')}}"
                                        alt=""style="height:40px;">&nbsp<B>Hirings!!! </B></P>
                                <div class="">
                                    @if ($hirings)
                                        @foreach ($hirings as $hiring)
                                            <div class="mx-1" style="margin-top: -10px;">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <p style="font-size:12px;margin-bottom: 10px;">
                                                            {{$hiring->title}}@if ($hiring->status == 1)
                                                                <img style="height:20px;" src="https://gglonline.net/wp-content/uploads/2018/10/new-gif-image-6.gif" alt="">
                                                            @endif
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class=""
                            style="background:linear-gradient(180deg, #bcebfd 100%, #87ddff 100%);box-shadow: 2px 8px 12px rgba(0, 170, 235, 0.3);border-radius: 18px;margin: 10px 0;height: 200px;padding: 14px;">
                            <div class="" style="padding:10x;">
                                <div class="row">
                                    <div class="col-sm-10">
                                        <P style="margin-bottom: 10px;"><img src="{{asset('assets/icon/join.png')}}"
                                                alt=""style="height:40px;">&nbsp<B>New Joiners</B></P>
                                    </div>
                                    <div class="col-sm-2" >
                                        <P wire:click = "new_joiners" style="margin-bottom: 10px;font-size: 11px;color:#00AAEB;border: 1px solid #00AAEB;text-decoration: none;padding: 5px 7px;border-radius: 20px;margin-left:-24px;">View&nbspAll</p>
                                    </div>
                                </div>
                                @if ($new_joiners)
                                    @foreach ($new_joiners as $new_joiner)
                                        <div class="mx-1" style="margin-top: -10px;">
                                            <div class="row">
                                                <div class="col-9">
                                                    <p style="font-size:12px;margin-bottom:10px;"><b>
                                                        {{$new_joiner->first_name}}</b>({{$new_joiner->user_group->name}})</p>
                                                </div>
                                                <div class="col-3">
                                                    <p class="text-right"
                                                        style="font-size:10px;margin-bottom: 10px; font-family: Segoe UI !important;">
                                                        {{$new_joiner->doj}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="name-sec"
                            style="background:linear-gradient(180deg, #b6c1ff 100% 0%, #b7c1fc 100%);box-shadow: 2px 8px 12px rgba(63, 81, 181, 0.3);border-radius: 18px;margin: 10px 0;height: 130px;padding: 14px;">
                            <div class="" style="padding:5px;">
                                <P><img src="{{asset('assets/icon/holy.png')}}"
                                        alt=""style="height:40px;font-weight:600">&nbsp<B>Holidays</B></P>
                                <label for="" style="color:#4F4F4F;font-size: 12px;">01 Jan<label
                                        for="" style="color:white;margin-left: 2px;"></label><br>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="name-sec"
                            style="background:linear-gradient(180deg, #C0FFDB 100%, #C0FFDB 100%);box-shadow: 2px 8px 12px rgba(39, 174, 96, 0.3);border-radius: 18px;margin: 10px 0;height: 130px;padding: 14px;">
                            <div class="" style="padding:1px;">
                                <div class="row">
                                    <div class="col-sm-10">
                                        <P><img src="{{asset('assets/icon/birthday.png')}}"
                                                alt=""style="height:40px;font-family:Segoe UI !important;font-style: normal !important;">&nbsp<B>Birthdays</B>
                                        </P>
                                    </div>
                                    <div class="col-sm-2">
                                        <P wire:click = "all_birthday" style="margin-bottom: 10px;font-size: 11px;color:#27AE60;border: 1px solid #27AE60;text-decoration: none;padding: 5px 7px;border-radius: 20px;margin-left:-24px;">View&nbspAll</p>
                                        </P>
                                    </div>
                                </div>
                                @if ($birthdays)
                                    @foreach ($birthdays as $birthday)
                                        <div class="mx-1" style="margin-top: -12px;">
                                            <div class="row">
                                                <p
                                                    style="font-size:11px;margin-bottom: 5px; font-family:Segoe UI !important;font-style: normal !important;">
                                                    <b>{{date('d-M', strtotime($birthday->dob_original));}}</b>,&nbsp;{{$birthday->first_name}}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    @if ($status == 1)
        <div class="container-fluid">
            <div class="row" style="margin-top: 30px;">
                <div class="col-md-12" style="padding: 0px;">
                    <div class="card">
                        <div class="card-header" style="padding-top:0px;padding-bottom:0px;background: #87ddff;">
                            <div class="row">
                                <div class="col-sm-11">
                                    <label style="color: white;padding-left: 10px;margin-top:10px;font-size:20px;font-weight:500;">
                                        This Month New Joiners
                                    </label>
                                </div>
                                <div class="col-sm-1 mt-2" >
                                    <button class="btn"  wire:click="back()">Back</button>
                                </div>
                            </div>
                        </div>
                        @if ($all_new_joiners)
                            @foreach ($all_new_joiners as $joiners)
                                <div class="row card-body" style="height: 70px !important;border-bottom: 1px solid #E0E0E0;margin : 0px 1px;">
                                    {{-- <div class="col-1">
                                        <label for="" style="color:black;font-weight: 500;border-radius: 50%;background: #03A9F4;padding: 10px 15px;">T</label>
                                    </div> --}}
                                    <div class="col-10">
                                        <label style="color:#4C4C4C;font-weight: 400 !important;margin-left:10px;font-size: 16px;padding: 0px !important;">{{$joiners->first_name}}<br><p style="font-size: 14px;color: rgba(0,0,0,.54);font-weight: 300;font-size: 14px;">{{$joiners->user_group->name}}</p></label>
                                    </div>
                                    <div class="col-2">
                                        <center>
                                            <label for="" style="color:gray;font-weight: 300 !important;font-size:14px;padding: 0px !important;">{{$joiners->doj}}</label>
                                        </center>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if ($status == 2)
    <div class="container-fluid">
        <div class="row" style="margin-top: 30px;">
            <div class="col-md-12" style="padding: 0px;">
                <div class="card">
                    <div class="card-header" style="padding-top:0px;padding-bottom:0px;background: #27AE60;">
                        <div class="row">
                            <div class="col-sm-11">
                                <label style="color: white;padding-left: 10px;margin-top:10px;font-size:20px;font-weight:500;">
                                    Upcoming Birthday
                                </label>
                            </div>
                            <div class="col-sm-1 mt-2">
                                <button class="btn" wire:click="back()">Back</button>
                            </div>
                        </div>
                    </div>
                    @if ($all_birthdays)
                        @foreach ($all_birthdays as $all_birthday)
                            <div class="row card-body" style="height: 70px !important;border-bottom: 1px solid #E0E0E0;margin : 0px 1px;">
                                {{-- <div class="col-1">
                                    <label for="" style="color:black;font-weight: 500;border-radius: 50%;background: #03A9F4;padding: 10px 15px;">T</label>
                                </div> --}}
                                <div class="col-10">
                                    <label style="color:#4C4C4C;font-weight: 400 !important;margin-left:10px;font-size: 16px;padding: 0px !important;">{{$all_birthday->first_name}}<br><p style="font-size: 14px;color: rgba(0,0,0,.54);font-weight: 300;font-size: 14px;">{{$all_birthday->user_group->name}}</p></label>
                                </div>
                                <div class="col-2">
                                    <center>
                                        <label for="" style="color:gray;font-weight: 300 !important;font-size:14px;padding: 0px !important;">{{$all_birthday->dob_original}}</label>
                                    </center>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
    @endif
</div>


