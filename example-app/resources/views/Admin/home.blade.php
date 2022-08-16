@extends('layouts.page_templates.auth', ['activePage' => 'profile', 'titlePage' => __('Control panel')])

@section('content')
  <div class="content">
    <div class="container-fluid">
        <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
        <div class="card-header card-header-warning card-header-icon">
        <div class="card-icon">
        <i class="material-icons">content_copy</i>
        </div>
        <p class="card-category">Used Space</p>
        <h3 class="card-title">49/50
        <small>GB</small>
        </h3>
        </div>
        <div class="card-footer">
        <div class="stats">
        <i class="material-icons text-danger">warning</i>
        <a href="#pablo">Get More Space...</a>
        </div>
        </div>
        </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
        <div class="card-header card-header-success card-header-icon">
        <div class="card-icon">
        <i class="material-icons">store</i>
        </div>
        <p class="card-category">Revenue</p>
        <h3 class="card-title">$34,245</h3>
        </div>
        <div class="card-footer">
        <div class="stats">
        <i class="material-icons">date_range</i> Last 24 Hours
        </div>
        </div>
        </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
        <div class="card-header card-header-danger card-header-icon">
        <div class="card-icon">
        <i class="material-icons">info_outline</i>
        </div>
        <p class="card-category">Fixed Issues</p>
        <h3 class="card-title">75</h3>
        </div>
        <div class="card-footer">
        <div class="stats">
        <i class="material-icons">local_offer</i> Tracked from Github
        </div>
        </div>
        </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
        <div class="card-header card-header-info card-header-icon">
        <div class="card-icon">
        <i class="fa fa-twitter"></i>
        </div>
        <p class="card-category">Followers</p>
        <h3 class="card-title">+245</h3>
        </div>
        <div class="card-footer">
        <div class="stats">
        <i class="material-icons">update</i> Just Updated
        </div>
        </div>
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col-md-4">
        <div class="card card-chart">
        <div class="card-header card-header-success">
        <div class="ct-chart" id="dailySalesChart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"><line x1="40" x2="40" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="94.80803571428572" x2="94.80803571428572" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="149.61607142857144" x2="149.61607142857144" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="204.42410714285714" x2="204.42410714285714" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="259.2321428571429" x2="259.2321428571429" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="314.04017857142856" x2="314.04017857142856" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="368.8482142857143" x2="368.8482142857143" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line y1="120" y2="120" x1="40" x2="423.65625" class="ct-grid ct-vertical"></line><line y1="96" y2="96" x1="40" x2="423.65625" class="ct-grid ct-vertical"></line><line y1="72" y2="72" x1="40" x2="423.65625" class="ct-grid ct-vertical"></line><line y1="48" y2="48" x1="40" x2="423.65625" class="ct-grid ct-vertical"></line><line y1="24" y2="24" x1="40" x2="423.65625" class="ct-grid ct-vertical"></line><line y1="0" y2="0" x1="40" x2="423.65625" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><path d="M40,91.2C94.808,79.2,94.808,79.2,94.808,79.2C149.616,103.2,149.616,103.2,149.616,103.2C204.424,79.2,204.424,79.2,204.424,79.2C259.232,64.8,259.232,64.8,259.232,64.8C314.04,76.8,314.04,76.8,314.04,76.8C368.848,28.8,368.848,28.8,368.848,28.8" class="ct-line"></path><line x1="40" y1="91.2" x2="40.01" y2="91.2" class="ct-point" ct:value="12" opacity="1"></line><line x1="94.80803571428572" y1="79.2" x2="94.81803571428573" y2="79.2" class="ct-point" ct:value="17" opacity="1"></line><line x1="149.61607142857144" y1="103.2" x2="149.62607142857144" y2="103.2" class="ct-point" ct:value="7" opacity="1"></line><line x1="204.42410714285714" y1="79.2" x2="204.43410714285713" y2="79.2" class="ct-point" ct:value="17" opacity="1"></line><line x1="259.2321428571429" y1="64.8" x2="259.2421428571429" y2="64.8" class="ct-point" ct:value="23" opacity="1"></line><line x1="314.04017857142856" y1="76.8" x2="314.05017857142855" y2="76.8" class="ct-point" ct:value="18" opacity="1"></line><line x1="368.8482142857143" y1="28.799999999999997" x2="368.85821428571427" y2="28.799999999999997" class="ct-point" ct:value="38" opacity="1"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="40" y="125" width="54.808035714285715" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 55px; height: 20px;">M</span></foreignObject><foreignObject style="overflow: visible;" x="94.80803571428572" y="125" width="54.808035714285715" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 55px; height: 20px;">T</span></foreignObject><foreignObject style="overflow: visible;" x="149.61607142857144" y="125" width="54.80803571428571" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 55px; height: 20px;">W</span></foreignObject><foreignObject style="overflow: visible;" x="204.42410714285714" y="125" width="54.80803571428572" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 55px; height: 20px;">T</span></foreignObject><foreignObject style="overflow: visible;" x="259.2321428571429" y="125" width="54.808035714285694" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 55px; height: 20px;">F</span></foreignObject><foreignObject style="overflow: visible;" x="314.04017857142856" y="125" width="54.80803571428572" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 55px; height: 20px;">S</span></foreignObject><foreignObject style="overflow: visible;" x="368.8482142857143" y="125" width="54.80803571428572" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 55px; height: 20px;">S</span></foreignObject><foreignObject style="overflow: visible;" y="96" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">0</span></foreignObject><foreignObject style="overflow: visible;" y="72" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">10</span></foreignObject><foreignObject style="overflow: visible;" y="48" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">20</span></foreignObject><foreignObject style="overflow: visible;" y="24" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">30</span></foreignObject><foreignObject style="overflow: visible;" y="0" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">40</span></foreignObject><foreignObject style="overflow: visible;" y="-30" x="0" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">50</span></foreignObject></g></svg></div>
        </div>
        <div class="card-body">
        <h4 class="card-title">Daily Sales</h4>
        <p class="card-category">
        <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
        </div>
        <div class="card-footer">
        <div class="stats">
        <i class="material-icons">access_time</i> updated 4 minutes ago
        </div>
        </div>
        </div>
        </div>
        <div class="col-md-4">
        <div class="card card-chart">
        <div class="card-header card-header-warning">
        <div class="ct-chart" id="websiteViewsChart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-bar" style="width: 100%; height: 100%;"><g class="ct-grids"><line y1="120" y2="120" x1="40" x2="418.65625" class="ct-grid ct-vertical"></line><line y1="96" y2="96" x1="40" x2="418.65625" class="ct-grid ct-vertical"></line><line y1="72" y2="72" x1="40" x2="418.65625" class="ct-grid ct-vertical"></line><line y1="48" y2="48" x1="40" x2="418.65625" class="ct-grid ct-vertical"></line><line y1="24" y2="24" x1="40" x2="418.65625" class="ct-grid ct-vertical"></line><line y1="0" y2="0" x1="40" x2="418.65625" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><line x1="55.77734375" x2="55.77734375" y1="120" y2="54.959999999999994" class="ct-bar" ct:value="542" opacity="1"></line><line x1="87.33203125" x2="87.33203125" y1="120" y2="66.84" class="ct-bar" ct:value="443" opacity="1"></line><line x1="118.88671875" x2="118.88671875" y1="120" y2="81.6" class="ct-bar" ct:value="320" opacity="1"></line><line x1="150.44140625" x2="150.44140625" y1="120" y2="26.400000000000006" class="ct-bar" ct:value="780" opacity="1"></line><line x1="181.99609375" x2="181.99609375" y1="120" y2="53.64" class="ct-bar" ct:value="553" opacity="1"></line><line x1="213.55078125" x2="213.55078125" y1="120" y2="65.64" class="ct-bar" ct:value="453" opacity="1"></line><line x1="245.10546875" x2="245.10546875" y1="120" y2="80.88" class="ct-bar" ct:value="326" opacity="1"></line><line x1="276.66015625" x2="276.66015625" y1="120" y2="67.92" class="ct-bar" ct:value="434" opacity="1"></line><line x1="308.21484375" x2="308.21484375" y1="120" y2="51.84" class="ct-bar" ct:value="568" opacity="1"></line><line x1="339.76953125" x2="339.76953125" y1="120" y2="46.8" class="ct-bar" ct:value="610" opacity="1"></line><line x1="371.32421875" x2="371.32421875" y1="120" y2="29.28" class="ct-bar" ct:value="756" opacity="1"></line><line x1="402.87890625" x2="402.87890625" y1="120" y2="12.599999999999994" class="ct-bar" ct:value="895" opacity="1"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="40" y="125" width="31.5546875" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 32px; height: 20px;">J</span></foreignObject><foreignObject style="overflow: visible;" x="71.5546875" y="125" width="31.5546875" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 32px; height: 20px;">F</span></foreignObject><foreignObject style="overflow: visible;" x="103.109375" y="125" width="31.5546875" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 32px; height: 20px;">M</span></foreignObject><foreignObject style="overflow: visible;" x="134.6640625" y="125" width="31.5546875" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 32px; height: 20px;">A</span></foreignObject><foreignObject style="overflow: visible;" x="166.21875" y="125" width="31.5546875" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 32px; height: 20px;">M</span></foreignObject><foreignObject style="overflow: visible;" x="197.7734375" y="125" width="31.5546875" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 32px; height: 20px;">J</span></foreignObject><foreignObject style="overflow: visible;" x="229.328125" y="125" width="31.5546875" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 32px; height: 20px;">J</span></foreignObject><foreignObject style="overflow: visible;" x="260.8828125" y="125" width="31.5546875" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 32px; height: 20px;">A</span></foreignObject><foreignObject style="overflow: visible;" x="292.4375" y="125" width="31.5546875" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 32px; height: 20px;">S</span></foreignObject><foreignObject style="overflow: visible;" x="323.9921875" y="125" width="31.5546875" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 32px; height: 20px;">O</span></foreignObject><foreignObject style="overflow: visible;" x="355.546875" y="125" width="31.5546875" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 32px; height: 20px;">N</span></foreignObject><foreignObject style="overflow: visible;" x="387.1015625" y="125" width="31.5546875" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 32px; height: 20px;">D</span></foreignObject><foreignObject style="overflow: visible;" y="96" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">0</span></foreignObject><foreignObject style="overflow: visible;" y="72" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">200</span></foreignObject><foreignObject style="overflow: visible;" y="48" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">400</span></foreignObject><foreignObject style="overflow: visible;" y="24" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">600</span></foreignObject><foreignObject style="overflow: visible;" y="0" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">800</span></foreignObject><foreignObject style="overflow: visible;" y="-30" x="0" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">1000</span></foreignObject></g></svg></div>
        </div>
        <div class="card-body">
        <h4 class="card-title">Email Subscriptions</h4>
        <p class="card-category">Last Campaign Performance</p>
        </div>
        <div class="card-footer">
        <div class="stats">
        <i class="material-icons">access_time</i> campaign sent 2 days ago
        </div>
        </div>
        </div>
        </div>
        <div class="col-md-4">
        <div class="card card-chart">
        <div class="card-header card-header-danger">
        <div class="ct-chart" id="completedTasksChart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"><line x1="40" x2="40" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="87.95703125" x2="87.95703125" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="135.9140625" x2="135.9140625" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="183.87109375" x2="183.87109375" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="231.828125" x2="231.828125" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="279.78515625" x2="279.78515625" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="327.7421875" x2="327.7421875" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="375.69921875" x2="375.69921875" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line y1="120" y2="120" x1="40" x2="423.65625" class="ct-grid ct-vertical"></line><line y1="96" y2="96" x1="40" x2="423.65625" class="ct-grid ct-vertical"></line><line y1="72" y2="72" x1="40" x2="423.65625" class="ct-grid ct-vertical"></line><line y1="48" y2="48" x1="40" x2="423.65625" class="ct-grid ct-vertical"></line><line y1="24" y2="24" x1="40" x2="423.65625" class="ct-grid ct-vertical"></line><line y1="0" y2="0" x1="40" x2="423.65625" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><path d="M40,92.4C87.957,30,87.957,30,87.957,30C135.914,66,135.914,66,135.914,66C183.871,84,183.871,84,183.871,84C231.828,86.4,231.828,86.4,231.828,86.4C279.785,91.2,279.785,91.2,279.785,91.2C327.742,96,327.742,96,327.742,96C375.699,97.2,375.699,97.2,375.699,97.2" class="ct-line"></path><line x1="40" y1="92.4" x2="40.01" y2="92.4" class="ct-point" ct:value="230" opacity="1"></line><line x1="87.95703125" y1="30" x2="87.96703125" y2="30" class="ct-point" ct:value="750" opacity="1"></line><line x1="135.9140625" y1="66" x2="135.9240625" y2="66" class="ct-point" ct:value="450" opacity="1"></line><line x1="183.87109375" y1="84" x2="183.88109375" y2="84" class="ct-point" ct:value="300" opacity="1"></line><line x1="231.828125" y1="86.4" x2="231.838125" y2="86.4" class="ct-point" ct:value="280" opacity="1"></line><line x1="279.78515625" y1="91.2" x2="279.79515625" y2="91.2" class="ct-point" ct:value="240" opacity="1"></line><line x1="327.7421875" y1="96" x2="327.7521875" y2="96" class="ct-point" ct:value="200" opacity="1"></line><line x1="375.69921875" y1="97.2" x2="375.70921875" y2="97.2" class="ct-point" ct:value="190" opacity="1"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="40" y="125" width="47.95703125" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 48px; height: 20px;">12p</span></foreignObject><foreignObject style="overflow: visible;" x="87.95703125" y="125" width="47.95703125" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 48px; height: 20px;">3p</span></foreignObject><foreignObject style="overflow: visible;" x="135.9140625" y="125" width="47.95703125" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 48px; height: 20px;">6p</span></foreignObject><foreignObject style="overflow: visible;" x="183.87109375" y="125" width="47.95703125" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 48px; height: 20px;">9p</span></foreignObject><foreignObject style="overflow: visible;" x="231.828125" y="125" width="47.95703125" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 48px; height: 20px;">12p</span></foreignObject><foreignObject style="overflow: visible;" x="279.78515625" y="125" width="47.95703125" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 48px; height: 20px;">3a</span></foreignObject><foreignObject style="overflow: visible;" x="327.7421875" y="125" width="47.95703125" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 48px; height: 20px;">6a</span></foreignObject><foreignObject style="overflow: visible;" x="375.69921875" y="125" width="47.95703125" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 48px; height: 20px;">9a</span></foreignObject><foreignObject style="overflow: visible;" y="96" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">0</span></foreignObject><foreignObject style="overflow: visible;" y="72" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">200</span></foreignObject><foreignObject style="overflow: visible;" y="48" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">400</span></foreignObject><foreignObject style="overflow: visible;" y="24" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">600</span></foreignObject><foreignObject style="overflow: visible;" y="0" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">800</span></foreignObject><foreignObject style="overflow: visible;" y="-30" x="0" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">1000</span></foreignObject></g></svg></div>
        </div>
        <div class="card-body">
        <h4 class="card-title">Completed Tasks</h4>
        <p class="card-category">Last Campaign Performance</p>
        </div>
        <div class="card-footer">
        <div class="stats">
        <i class="material-icons">access_time</i> campaign sent 2 days ago
        </div>
        </div>
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col-lg-6 col-md-12">
        <div class="card">
        <div class="card-header card-header-tabs card-header-primary">
        <div class="nav-tabs-navigation">
        <div class="nav-tabs-wrapper">
        <span class="nav-tabs-title">Tasks:</span>
        <ul class="nav nav-tabs" data-tabs="tabs">
        <li class="nav-item">
        <a class="nav-link active" href="#profile" data-toggle="tab">
        <i class="material-icons">bug_report</i> Bugs
        <div class="ripple-container"></div>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#messages" data-toggle="tab">
        <i class="material-icons">code</i> Website
        <div class="ripple-container"></div>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#settings" data-toggle="tab">
        <i class="material-icons">cloud</i> Server
        <div class="ripple-container"></div>
        </a>
        </li>
        </ul>
        </div>
        </div>
        </div>
        <div class="card-body">
        <div class="tab-content">
        <div class="tab-pane active" id="profile">
        <table class="table">
        <tbody>
        <tr>
        <td>
        <div class="form-check">
        <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="" checked="">
        <span class="form-check-sign">
        <span class="check"></span>
        </span>
        </label>
        </div>
        </td>
         <td>Sign contract for "What are conference organizers afraid of?"</td>
        <td class="td-actions text-right">
        <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task">
        <i class="material-icons">edit</i>
        </button>
        <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
        <i class="material-icons">close</i>
        </button>
        </td>
        </tr>
        <tr>
        <td>
        <div class="form-check">
        <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="">
        <span class="form-check-sign">
        <span class="check"></span>
        </span>
        </label>
        </div>
        </td>
        <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
        <td class="td-actions text-right">
        <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task">
        <i class="material-icons">edit</i>
        </button>
        <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
        <i class="material-icons">close</i>
        </button>
        </td>
        </tr>
        <tr>
        <td>
        <div class="form-check">
        <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="">
        <span class="form-check-sign">
        <span class="check"></span>
        </span>
        </label>
        </div>
        </td>
        <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
        </td>
        <td class="td-actions text-right">
        <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task">
        <i class="material-icons">edit</i>
        </button>
        <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
        <i class="material-icons">close</i>
        </button>
        </td>
        </tr>
        <tr>
        <td>
        <div class="form-check">
        <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="" checked="">
        <span class="form-check-sign">
        <span class="check"></span>
        </span>
        </label>
        </div>
        </td>
        <td>Create 4 Invisible User Experiences you Never Knew About</td>
        <td class="td-actions text-right">
        <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task">
        <i class="material-icons">edit</i>
        </button>
        <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
        <i class="material-icons">close</i>
        </button>
        </td>
        </tr>
        </tbody>
        </table>
        </div>
        <div class="tab-pane" id="messages">
        <table class="table">
        <tbody>
        <tr>
        <td>
        <div class="form-check">
        <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="" checked="">
        <span class="form-check-sign">
        <span class="check"></span>
        </span>
        </label>
        </div>
        </td>
        <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
        </td>
        <td class="td-actions text-right">
        <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task">
        <i class="material-icons">edit</i>
        </button>
        <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
        <i class="material-icons">close</i>
        </button>
        </td>
        </tr>
        <tr>
        <td>
        <div class="form-check">
        <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="">
        <span class="form-check-sign">
        <span class="check"></span>
        </span>
        </label>
        </div>
        </td>
        <td>Sign contract for "What are conference organizers afraid of?"</td>
        <td class="td-actions text-right">
        <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task">
        <i class="material-icons">edit</i>
        </button>
        <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
        <i class="material-icons">close</i>
        </button>
        </td>
        </tr>
        </tbody>
        </table>
        </div>
        <div class="tab-pane" id="settings">
        <table class="table">
        <tbody>
        <tr>
        <td>
        <div class="form-check">
        <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="">
        <span class="form-check-sign">
        <span class="check"></span>
        </span>
        </label>
        </div>
        </td>
        <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
        <td class="td-actions text-right">
        <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task">
        <i class="material-icons">edit</i>
        </button>
        <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
        <i class="material-icons">close</i>
        </button>
        </td>
        </tr>
        <tr>
        <td>
        <div class="form-check">
        <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="" checked="">
        <span class="form-check-sign">
        <span class="check"></span>
        </span>
        </label>
        </div>
        </td>
        <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
        </td>
        <td class="td-actions text-right">
        <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task">
        <i class="material-icons">edit</i>
        </button>
        <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
        <i class="material-icons">close</i>
        </button>
        </td>
        </tr>
        <tr>
        <td>
        <div class="form-check">
        <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="" checked="">
        <span class="form-check-sign">
        <span class="check"></span>
        </span>
        </label>
        </div>
        </td>
        <td>Sign contract for "What are conference organizers afraid of?"</td>
        <td class="td-actions text-right">
        <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task">
        <i class="material-icons">edit</i>
        </button>
        <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
        <i class="material-icons">close</i>
        </button>
        </td>
        </tr>
        </tbody>
        </table>
        </div>
        </div>
        </div>
        </div>
        </div>
        <div class="col-lg-6 col-md-12">
        <div class="card">
        <div class="card-header card-header-warning">
        <h4 class="card-title">Employees Stats</h4>
        <p class="card-category">New employees on 15th September, 2016</p>
        </div>
        <div class="card-body table-responsive">
        <table class="table table-hover">
        <thead class="text-warning">
        <tr><th>ID</th>
        <th>Name</th>
        <th>Salary</th>
        <th>Country</th>
        </tr></thead>
        <tbody>
        <tr>
        <td>1</td>
        <td>Dakota Rice</td>
        <td>$36,738</td>
        <td>Niger</td>
        </tr>
        <tr>
        <td>2</td>
        <td>Minerva Hooper</td>
        <td>$23,789</td>
        <td>Curaçao</td>
        </tr>
        <tr>
        <td>3</td>
         <td>Sage Rodriguez</td>
        <td>$56,142</td>
        <td>Netherlands</td>
        </tr>
        <tr>
        <td>4</td>
        <td>Philip Chaney</td>
        <td>$38,735</td>
        <td>Korea, South</td>
        </tr>
        </tbody>
        </table>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
  </div>
@endsection
