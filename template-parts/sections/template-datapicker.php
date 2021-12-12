<?php
/**
 * Datapicker
 *
 * @package WordPress
 * @subpackage BVH
 * @since BVH 1.0
 */

?>

<style>
  .check-in-form-container {
    display: none;
  }
</style>
<div class="check-in-form-container">

  <form action="https://bellavistacorfu.reserve-online.net/" method="post" class="my-calendar-form" target="_blank">
    <div class="calendar-input-wrap">
      <input type="hidden" name="lang" value="en_GB">
      <h5 class="calendarTitle"><?php the_field('calendar_title','options'); ?></h5>
      <div class="singleFormBox singleFormBox--first">
        <!-- <label for="checkin"><?php echo __('Check-In','bellavista'); ?></label> -->
        <input id="checkin" type="text" class="arrival" name="checkin" size="12" readonly maxlength="10"
          placeholder="<?php echo __('Check-In','bellavista'); ?>">
      </div>
      <div class="singleFormBox singleFormBox--second">
        <!-- <label for="checkin"><?php echo __('Check-Out','bellavista'); ?></label> -->
        <input id="checkout" type="text" class="departure" name="checkout" size="12" readonly maxlength="10"
          placeholder="<?php echo __('Check-Out','bellavista'); ?>">
      </div>
      <button type="submit" class="prime"><?php echo __('Check Availability','bellavista'); ?></button>
    </div>
  </form>

</div>


<script type="text/javascript">
!function(n){var i=function(i,r){if(this.element=n(i),this.format=t.parseFormat(r.format||this.element.data("date-format")||"mm/dd/yyyy"),this.picker=n(t.template).appendTo("body").on({click:n.proxy(this.click,this)}),this.isInput=this.element.is("input"),this.component=this.element.is(".date")?this.element.find(".add-on"):!1,this.isInput)this.element.on({focus:n.proxy(this.show,this),keyup:n.proxy(this.update,this)});else if(this.component)this.component.on("click",n.proxy(this.show,this));else this.element.on("click",n.proxy(this.show,this));if(this.minViewMode=r.minViewMode||this.element.data("date-minviewmode")||0,typeof this.minViewMode=="string")switch(this.minViewMode){case"months":this.minViewMode=1;break;case"years":this.minViewMode=2;break;default:this.minViewMode=0}if(this.viewMode=r.viewMode||this.element.data("date-viewmode")||0,typeof this.viewMode=="string")switch(this.viewMode){case"months":this.viewMode=1;break;case"years":this.viewMode=2;break;default:this.viewMode=0}this.startViewMode=this.viewMode;this.weekStart=r.weekStart||this.element.data("date-weekstart")||0;this.weekEnd=this.weekStart===0?6:this.weekStart-1;this.onRender=r.onRender;this.fillDow();this.fillMonths();this.update();this.showMode()},t;i.prototype={constructor:i,show:function(t){this.picker.show();this.height=this.component?this.component.outerHeight():this.element.outerHeight();this.place();n(window).on("resize",n.proxy(this.place,this));t&&(t.stopPropagation(),t.preventDefault());!this.isInput;var i=this;n(document).on("mousedown",function(t){n(t.target).closest(".datepicker").length==0&&i.hide()});this.element.trigger({type:"show",date:this.date})},hide:function(){this.picker.hide();n(window).off("resize",this.place);this.viewMode=this.startViewMode;this.showMode();this.isInput||n(document).off("mousedown",this.hide);this.element.trigger({type:"hide",date:this.date})},set:function(){var n=t.formatDate(this.date,this.format);this.isInput?this.element.prop("value",n):(this.component&&this.element.find("input").prop("value",n),this.element.data("date",n))},setValue:function(n){this.date=typeof n=="string"?t.parseDate(n,this.format):new Date(n);this.set();this.viewDate=new Date(this.date.getFullYear(),this.date.getMonth(),1,0,0,0,0);this.fill()},place:function(){var n=this.component?this.component.offset():this.element.offset();this.picker.css({top:n.top+this.height,left:n.left})},update:function(n){this.date=t.parseDate(typeof n=="string"?n:this.isInput?this.element.prop("value"):this.element.data("date"),this.format);this.viewDate=new Date(this.date.getFullYear(),this.date.getMonth(),1,0,0,0,0);this.fill()},fillDow:function(){for(var i=this.weekStart,n="<tr>";i<this.weekStart+7;)n+='<th class="dow">'+t.dates.daysMin[i++%7]+"<\/th>";n+="<\/tr>";this.picker.find(".datepicker-days thead").append(n)},fillMonths:function(){for(var n="",i=0;i<12;)n+='<span class="month">'+t.dates.monthsShort[i++]+"<\/span>";this.picker.find(".datepicker-months td").append(n)},fill:function(){var a=new Date(this.viewDate),i=a.getFullYear(),s=a.getMonth(),p=this.date.valueOf(),n,h,u,r,f,e,c,l,v,y,o;for(this.picker.find(".datepicker-days th:eq(1)").text(t.dates.months[s]+" "+i),n=new Date(i,s-1,28,0,0,0,0),h=t.getDaysInMonth(n.getFullYear(),n.getMonth()),n.setDate(h),n.setDate(h-(n.getDay()-this.weekStart+7)%7),u=new Date(n),u.setDate(u.getDate()+42),u=u.valueOf(),r=[];n.valueOf()<u;)n.getDay()===this.weekStart&&r.push("<tr>"),f=this.onRender(n),e=n.getFullYear(),c=n.getMonth(),c<s&&e===i||e<i?f+=" old":(c>s&&e===i||e>i)&&(f+=" new"),n.valueOf()===p&&(f+=" active"),r.push('<td class="day '+f+'">'+n.getDate()+"<\/td>"),n.getDay()===this.weekEnd&&r.push("<\/tr>"),n.setDate(n.getDate()+1);for(this.picker.find(".datepicker-days tbody").empty().append(r.join("")),l=this.date.getFullYear(),v=this.picker.find(".datepicker-months").find("th:eq(1)").text(i).end().find("span").removeClass("active"),l===i&&v.eq(this.date.getMonth()).addClass("active"),r="",i=parseInt(i/10,10)*10,y=this.picker.find(".datepicker-years").find("th:eq(1)").text(i+"-"+(i+9)).end().find("td"),i-=1,o=-1;o<11;o++)r+='<span class="year'+(o===-1||o===10?" old":"")+(l===i?" active":"")+'">'+i+"<\/span>",i+=1;y.html(r)},click:function(i){var r,e,u,f;if(i.stopPropagation(),i.preventDefault(),r=n(i.target).closest("span, td, th"),r.length===1)switch(r[0].nodeName.toLowerCase()){case"th":switch(r[0].className){case"switch":this.showMode(1);break;case"prev":case"next":this.viewDate["set"+t.modes[this.viewMode].navFnc].call(this.viewDate,this.viewDate["get"+t.modes[this.viewMode].navFnc].call(this.viewDate)+t.modes[this.viewMode].navStep*(r[0].className==="prev"?-1:1));this.fill();this.set()}break;case"span":r.is(".month")?(u=r.parent().find("span").index(r),this.viewDate.setMonth(u)):(f=parseInt(r.text(),10)||0,this.viewDate.setFullYear(f));this.viewMode!==0&&(this.date=new Date(this.viewDate),this.element.trigger({type:"changeDate",date:this.date,viewMode:t.modes[this.viewMode].clsName}));this.showMode(-1);this.fill();this.set();break;case"td":r.is(".day")&&!r.is(".disabled")&&(e=parseInt(r.text(),10)||1,u=this.viewDate.getMonth(),r.is(".old")?u-=1:r.is(".new")&&(u+=1),f=this.viewDate.getFullYear(),this.date=new Date(f,u,e,0,0,0,0),this.viewDate=new Date(f,u,Math.min(28,e),0,0,0,0),this.fill(),this.set(),this.element.trigger({type:"changeDate",date:this.date,viewMode:t.modes[this.viewMode].clsName}))}},mousedown:function(n){n.stopPropagation();n.preventDefault()},showMode:function(n){n&&(this.viewMode=Math.max(this.minViewMode,Math.min(2,this.viewMode+n)));this.picker.find(">div").hide().filter(".datepicker-"+t.modes[this.viewMode].clsName).show()}};n.fn.datepicker=function(t,r){return this.each(function(){var f=n(this),u=f.data("datepicker"),e=typeof t=="object"&&t;u||f.data("datepicker",u=new i(this,n.extend({},n.fn.datepicker.defaults,e)));typeof t=="string"&&u[t](r)})};n.fn.datepicker.defaults={onRender:function(){return""}};n.fn.datepicker.Constructor=i;t={modes:[{clsName:"days",navFnc:"Month",navStep:1},{clsName:"months",navFnc:"FullYear",navStep:1},{clsName:"years",navFnc:"FullYear",navStep:10}],dates:{days:["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],daysShort:["Sun","Mon","Tue","Wed","Thu","Fri","Sat","Sun"],daysMin:["Su","Mo","Tu","We","Th","Fr","Sa","Su"],months:["January","February","March","April","May","June","July","August","September","October","November","December"],monthsShort:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"]},isLeapYear:function(n){return n%4==0&&n%100!=0||n%400==0},getDaysInMonth:function(n,i){return[31,t.isLeapYear(n)?29:28,31,30,31,30,31,31,30,31,30,31][i]},parseFormat:function(n){var i=n.match(/[.\/\-\s].*?/),t=n.split(/\W+/);if(!i||!t||t.length===0)throw new Error("Invalid date format.");return{separator:i,parts:t}},parseDate:function(n,t){var f=n.split(t.separator),n=new Date,i,r,s;if(n.setHours(0),n.setMinutes(0),n.setSeconds(0),n.setMilliseconds(0),f.length===t.parts.length){var u=n.getFullYear(),e=n.getDate(),o=n.getMonth();for(r=0,s=t.parts.length;r<s;r++){i=parseInt(f[r],10)||1;switch(t.parts[r]){case"dd":case"d":e=i;n.setDate(i);break;case"mm":case"m":o=i-1;n.setMonth(i-1);break;case"yy":u=2e3+i;n.setFullYear(2e3+i);break;case"yyyy":u=i;n.setFullYear(i)}}n=new Date(u,o,e,0,0,0)}return n},formatDate:function(n,t){var i={d:n.getDate(),m:n.getMonth()+1,yy:n.getFullYear().toString().substring(2),yyyy:n.getFullYear()},n,r,u;for(i.dd=(i.d<10?"0":"")+i.d,i.mm=(i.m<10?"0":"")+i.m,n=[],r=0,u=t.parts.length;r<u;r++)n.push(i[t.parts[r]]);return n.join(t.separator)},headTemplate:'<thead><tr><th class="prev">&lsaquo;<\/th><th colspan="5" class="switch"><\/th><th class="next">&rsaquo;<\/th><\/tr><\/thead>',contTemplate:'<tbody><tr><td colspan="7"><\/td><\/tr><\/tbody>'};t.template='<div class="datepicker dropdown-menu"><div class="datepicker-days"><table class=" table-condensed">'+t.headTemplate+'<tbody><\/tbody><\/table><\/div><div class="datepicker-months"><table class="table-condensed">'+t.headTemplate+t.contTemplate+'<\/table><\/div><div class="datepicker-years"><table class="table-condensed">'+t.headTemplate+t.contTemplate+"<\/table><\/div><\/div>"}(window.jQuery);var nowTemp=new Date,now=new Date(nowTemp.getFullYear(),nowTemp.getMonth(),nowTemp.getDate(),0,0,0,0),checkin=jQuery("#checkin").datepicker({format:"dd-mm-yyyy",onRender:function(n){return n.valueOf()<now.valueOf()?"disabled":""}}).on("changeDate",function(n){if(n.date.valueOf()>checkout.date.valueOf()){var t=new Date(n.date);t.setDate(t.getDate()+1);checkout.setValue(t)}checkin.hide();jQuery("#checkout")[0].focus()}).data("datepicker"),checkout=jQuery("#checkout").datepicker({format:"dd-mm-yyyy",onRender:function(n){return n.valueOf()<=checkin.date.valueOf()?"disabled":""}}).on("changeDate",function(){checkout.hide()}).data("datepicker");
</script>
