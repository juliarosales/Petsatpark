@extends('layout')

@section('content')

<style type="text/css">
	
	#name, #password, #password_confirmation, #phone, #email {
    background-color: #ffffff;
    border: 1px solid #cccccc;
    border-radius: 5px !important;
    color: #555555;
    display: block;
    font-size: 14px;
    height: 34px;
    padding: 6px 12px;
    width: 50%;
}
</style>

<div class="wrap">
<div class="row">
<div class="col-lg-4 col-md-4">
<div class="hidden-xs hidden-sm">
<div class="textwidget">
<h2>Our Services</h2>
<ul class="left_navigation">
<li>
<a href="http://www.petsatpark.com/site/services/angels-reiky-therapy/">Angels & Reiky Therapy</a>
</li>
<li>
<a href="http://www.petsatpark.com/site/services/pets-at-park-taxi/">Pets at Park Taxi</a>
</li>
<li>
<a href="http://www.petsatpark.com/site/services/senior-dog-relax-package/">Senior Dog Relax Package</a>
</li>
<li>
<a href="http://www.petsatpark.com/site/services/pets-at-park-package/">Pets at Park Package</a>
</li>
<li>
<a href="http://www.petsatpark.com/site/services/daily-dog-jogging-and-run-package/">Dog Jogging & Run Package</a>
</li>
<li>
<a href="http://www.petsatpark.com/site/services/daily-walking-package/">Daily Walking Package</a>
</li>
</ul>
<img class="alignleft size-full wp-image-466" width="291" height="70" alt="gps-satellite-tracking" src="http://www.petsatpark.com/site/wp-content/uploads/2015/10/gps-satellite-tracking.png">
<div class="clear"></div>
<img class="alignleft wp-image-296 size-full" width="90" height="83" alt="eco-logo" src="http://www.petsatpark.com/site/wp-content/uploads/2015/08/eco-logo.png">
<img class="alignright wp-image-410 size-full" width="90" height="90" alt="" src="http://www.petsatpark.com/site/wp-content/uploads/2015/10/napps.png">
</div>
</div>
</div>
<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
<div class="vc_row wpb_row vc_row-fluid">
<div class="wpb_column vc_column_container vc_col-sm-12">
<div class="vc_column-inner ">
<div class="wpb_wrapper">
<div class="wpb_text_column wpb_content_element ">
<div class="wpb_wrapper">
<h4>New member registration</h4>
<div id="wpmem_reg">
<a name="register"></a>
<form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
<fieldset>
<legend>New User Registration</legend>
@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
<label class="text" for="name">
Name
<span class="req">*</span>
</label>
<div class="div_text">
<input type="text" class="username" name="name" value="{{ old('name') }}" id="name">
</div>
<label class="text" for="email">
Email
<span class="req">*</span>
</label>
<div class="div_text">
<input type="email" class="textbox" name="email" value="{{ old('email') }}" id="email">
</div>
<label class="text" for="phone_number">
Phone Number
<span class="req">*</span>
</label>
<div class="div_text">
<input type="text" class="textbox" name="phone" value="{{ old('phone') }}" id="phone">
</div>
<label class="text" for="password">
Password
<span class="req">*</span>
</label>
<div class="div_text">
<input type="password" class="textbox" name="password" id="password">
</div>
<label class="text" for="password">
Confirm Password
<span class="req">*</span>
</label>
<div class="div_text">
<input type="password" class="textbox" name="password_confirmation" id="password_confirmation">
</div>

<div class="div_text">
<input id="tos" type="checkbox" value="agree" name="tos">
<span class="req">*</span>
Please indicate that you agree to the
<a onclick="window.open('http://www.petsatpark.com/site/wp-content/plugins/wp-members/wp-members-tos.php','mywindow');" href="#"> Terms and Conditions </a>
</div>
<div class="frame">
<iframe width="100%" height="150" frameborder="0" src="http://www.petsatpark.com/site/wp-content/plugins/wp-members/wp-members-tos.php">
<html>
<head>
<title>Terms of Service | Pets at Park</title>
</head>
<body>
<strong>PETS AT PARK PRIVACY POLICY</strong>
<p>
This Privacy Policy disclose the privacy practices for the website
<em>www.petsatpark.com</em>
(the “
<u>Website</u>
”) and describes how Pets at Park, LLC (“
<u>Pets at Park</u>
”), the operator of this Website, collects, protects, and uses information we receive from visitors to this Website and customers of the Pets at Park services (“Customers”). Because Pets at Park takes seriously its commitment to protect the private information of its Customers, we have prepared this Privacy Policy to enable you to understand which personal identifying information of yours is collected, how and when we might use your information, how we protect your information, who has access to your information, and how you can correct any inaccuracies in the information. We will not disclose this information to any person or organization outside Pets at Park, except as described in this Privacy Policy. Capitalized terms used herein without being defined herein shall have the meaning ascribed to such capitalized term in the Pets at Park’s Terms of Service, as applicable. This Privacy Policy hereby incorporates by reference the Pets at Park’s Terms of Service (as in effect from time to time, as set forth on the Website) and Pets at Park’s Policies (as in effect from time to time and delivered to Customers upon request).
</p>
<strong>
<u>1. Information We Receive</u>
</strong>
<br>
<br>
<p>
<strong>1.1 – Information we receive from our Customers:</strong>
When you create an Account and become a Customer, you will be required to provide certain information and you will establish a username and a password. In some cases, we may ask for additional information for security reasons or to provide specific services to you, such as, pet sitting services, pet walking services and other services made available to you by Pets at Park (the “
<u>Services</u>
”).
</p>
<br>
<p>
<strong>1.2 – Information we collect when you interact with Pets at Park:</strong>
We use cookies, which are small bits of text that our servers place into a file on your computer’s hard drive. When you visit our Website, open our email, or encounter our Services online we may send you a cookie. Cookies may be used to (i) allow us to verify the login status of Customers using Services linked directly with our Website, (ii) measure the success of a particular marketing campaign and (iii) track overall Website usage. All that information will enable us to make your visit to our Website easier by recognizing you when you return and allow us to provide you with a customized internet experience.
</p>
<p>Note that the usage of a cookie is in no way linked to any personally identifiable information while on our Website. You have the ability to accept or decline cookies by modifying the settings in your browser. If you choose to disable cookies, you may still use our Website; however, you may have limited access to some areas within our Website. For more information on how to manage cookies in your web browser, see http://www.aboutcookies.org.</p>
<p>We may have web beacons (also known as single-pixel GIFs), which are invisible graphical images, in some of our emails, web pages and other online content. These web beacons allow us to count users who have opened our email, visited our web pages and seen our ads. Web beacons collect only limited information and allow us to determine, for example, the number of people who open our emails. Web beacons cannot be declined when delivered via a regular web page. However, web beacons can be refused when delivered via email. If you do not wish to receive web beacons via email, you will need to disable HTML images or refuse HTML (select Text only) emails via your email software.</p>
<p>We also use pixels, or transparent GIF files, to help manage online advertising. These GIF files are provided by our ad management partners; they enable our partners to recognize a unique ad impression cookie on your Web browser, which in turn enables us to learn which advertisements bring users to our website. With both cookies and web beacons, the information that we collect and share is anonymous and not personally identifiable. It does not contain your name, address, telephone number, or email address. [We give all internet users the choice to opt-out of receiving our ad impression cookie. If you opt out, your web browser will be associated with a generic "opt-out" cookie, which will prevent us from associating any non-personally identifiable information with your browser. Our "opt-out" cookie has no expiration date. Keep in mind that participating in our opt-out program does not prevent you from seeing our online ads; instead, information about the online ads we serve to you will not be recorded. If you wish to opt-out of receiving this cookie, please refer to the “How you opt out or report violations” section]. [PLEASE CONFIRM WHETHER PETSATPARK WILL USE AD IMPRESSION COOKIES AND AN OPT-OUT FEATURE]</p>
<br>
<strong>
<u>2. Links to third-party websites</u>
</strong>
<br>
<p>Pets at Park Website may provide links to third-party websites, such as those of our business partners. When you click on those links you may leave our Website. While on these websites, Pets at Park or its partners may collect information about you. Because Pets at Park does not control the information policies or practices of these third parties, you should review their privacy policies to learn more about how they collect and use personally identifiable information.</p>
<br>
<strong>
<u>3. How We Use Your Information:</u>
</strong>
<br>
<p>Pets at Park will never sell, share, or rent the information collected from you with third parties in ways different from what is disclosed in this Privacy Policy without your consent. Occasionally, we enter into contracts with third parties so that they can assist us in servicing you. The contracts prohibit them from using any of your personal information for their own purposes, and they are required to maintain the confidentiality of the information we provide to them. Even though we do not share your information with advertisers without your consent, when you click on or otherwise interact with an advertisement there is a possibility that the advertiser may place a cookie in your browser and note that it meets the criteria they selected. </p>
<p>We use the information collected to provide Services to you and to measure and improve those Services. We also use the information to prevent potentially illegal activities, and to enforce this Privacy Policy and our Terms of Service.</p>
<p>We may contact you from time to time with some service related announcements. You may opt out of all communications except essential updates on your account page. We may include content you see on Pets at Park Website in the emails we send to you.</p>
<p>We will request financial information such as credit card or bank account information only if you are purchasing Pets at Park Services. Any financial information we collect is used only to bill you for purchased Pets at Park Services. If you purchase by credit card, this information may be forwarded to your credit card provider. </p>
<p>If you choose to use our referral or loyalty programs to tell a friend about our Website and our Services, we will ask you for your friend's email address. We will automatically send your friend an email invitation to him or her visit our Website. Pets at Park retains this information for the sole purpose of sending this email and tracking the success of our referral or loyalty programs.</p>
<br>
<strong>
<u>4. How We Share Your Information</u>
</strong>
<br>
<p>We share your information with third parties in the following ways:</p>
<ol type="i">
<li>To respond to legal requests.</li>
<li>To prevent fraud or other illegal activity, to prevent imminent bodily harm or to protect ourselves, you or your Pet. This may include sharing information with other companies, non profit organizations, lawyers, courts and other government entities.</li>
<li>With agents and contractors who use such information on behalf of Pets at Park in connection with administering the Pets at Park Website or delivering the Pets at Park Services on behalf of Pets at Park.</li>
<li>With other affiliates or partners of Pets at Park as described in this Privacy Policy.</li>
<li>As needed in connection with the transfer of the ownership of all or substantially all of our business assets. In such a case, your information would remain subject to the promises made in any pre-existing Privacy Policy.</li>
</ol>
<br>
<strong>
<u>5. How We Protect Your Information</u>
</strong>
<br>
<p>We use industry-recognized security safeguards coupled with carefully developed security procedures to prevent loss, misuse, alteration or unauthorized disclosure of information under our control. We use various measure to protect the information we collect, including encryption, firewalls, and access controls. Your information is only accessible by authorized employees, agents and contractors of Pets at Park.</p>
<p>When we collect sensitive account information such as credit card numbers and passwords, we encrypt that information using secure socket layer technology (SSL). </p>
<br>
<strong>
<u>6. Retention and Disposal of Your Information</u>
</strong>
<br>
<p>Pets at Park will retain your personal information for the period necessary to fulfill the purposes outlined in this Privacy Policy unless a longer retention period is required or permitted by law. The disposal of Pets at Park media will be in accordance with Pets at Part IT Policy.</p>
<br>
<strong>
<u>7. How You Opt-Out or Report Violations</u>
</strong>
<br>
<br>
<strong>
<u>7.1 – Opt-Out: </u>
</strong>
<br>
<p>Customers always have the opportunity to opt-out or change preferences via a link in the footer of all non-transactional email messages. These options are made available when you sign-up for our email lists and in email messages delivered from Pets at Park. Alternatively, you may email us at contact@petsatpark.com. </p>
<p>Please note that some communications (e.g. important account notifications and billing information) are considered transactional and are necessary for all Pets at Park Customers. You must cancel your Pets at Park Account to unsubscribe from these communications. To cancel your Pets at Park Account, please email us at contact@petsatpark.com.</p>
<br>
<strong>
<u>7.2 - Report Violations:</u>
</strong>
<br>
<p>If you believe that you have received an unsolicited commercial email from Pets at Park or would like to report a violation, please email us at contact@petsatpark.com.</p>
<br>
<strong>
<u>8. Notification of Changes</u>
</strong>
<br>
<p>Pets at Park hereby reserves the right to amend, alter, modify, replace or suspend this Privacy Policy, from time to time, in its sole discretion. Unless stated otherwise, our current privacy policy applies to all information that we have about you and your Account. All such changes to this Privacy Policy will be effective when posted on Pets at Park’s website. </p>
<br>
<strong>
<u>9. Questions about this Privacy Policy</u>
</strong>
<br>
<p>If you have any questions or comments regarding this Privacy Policy please contact:</p>
<br>
<strong>Pets at Park LLC</strong>
<br>
Attn: Compliance Department
<br>
20008 Champion Forrest Drive,
<br>
Building 2, Unit 201
<br>
Spring, Texas 77379
<br>
<br>
<br>
[
<a href="javascript:window.print()">print</a>
]
</body>
</html>
</iframe>
</div>
<div class="clear"></div>
<div class="button_div">
<input class="buttons" type="submit" value="Register" name="submit">
</div>
<div class="req-text">
<span class="req">*</span>
Required field
</div>
</fieldset>
</form>
</div>
<p></p>
</div>
<p></p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<!--

<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">New member registration</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">Name</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="{{ old('name') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail Address</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Phone number</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="phone" value="{{ old('phone') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Confirm Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password_confirmation">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Register
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div> -->
@endsection