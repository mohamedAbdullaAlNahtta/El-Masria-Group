
// the below script for a translatore for the whole web page based on Dictionary array of key words

// starting by putting the key words in a dictionary 
arDictionaryOne = [];
arDictionaryOne[">translate a web page using JavaScript by Muhammad Abdullah El Nahtta<"] =
">ترجمة صفحة ويب باستخدام مصفوفات جافا سكريبت لمحمد عبدالله النحتة<";
arDictionaryOne[">Arabicss Call Center V 1.0.0<"]=">مركز اتصال أرابيكس V 1.0.0<";
arDictionaryOne[">Dashboard<"]=">لوحة القيادة<";
arDictionaryOne[">Real Time Monitoring<"]=">المراقبة في الوقت الحقيقي<";
arDictionaryOne[">Agents Monitoring<"]=">مراقبة الوكلاء<";
arDictionaryOne[">Extension Monitoring<"]=">مراقبة الامتداد<";
arDictionaryOne[">Queues Monitoring<"]=">مراقبة قوائم الانتظار<";
arDictionaryOne[">Historical Reports<"]=">التقارير التاريخية<";
arDictionaryOne[">Call Recording<"]=">تسجيل المكالمات<";
arDictionaryOne[">CC Support<"]=">دعم CC<";
arDictionaryOne[">Support Dashboard<"]=">لوحة الدعم<";
arDictionaryOne[">Reports<"]=">التقارير<";
arDictionaryOne[">Technical Support<"]=">دعم فني<";
arDictionaryOne[">Inquiry<"]=">سؤال<";
arDictionaryOne[">Request<"]=">طلب<";
arDictionaryOne[">Issue<"]=">مشكلة<";
arDictionaryOne[">Sales Support<"]=">دعم المبيعات<";
arDictionaryOne[">Setting<"]=">الاعدادات<";
arDictionaryOne[">Login History<"]=">سجل تسجيل الدخول<";
arDictionaryOne[">log Management<"]=">إدارة السجل<";
arDictionaryOne[">Change Profile Image<"]=">تغيير صورة الملف الشخصي<";
arDictionaryOne[">Change Password<"]=">تغيير كلمة المرور<";
arDictionaryOne[">Manage Extensions Profile<"]=">إدارة ملف الامتدادات<";
arDictionaryOne[">System Administration<"]=">إدارة النظام<";
arDictionaryOne[">User Management<"]=">إدارةالمستخدم<";
arDictionaryOne[">Security<"]=">حماية<";
arDictionaryOne[">Reset User Password<"]=">إعادة تعيين كلمة مرور المستخدم<";
arDictionaryOne[">Blocked Users<"]=">مستخدمين محجوبين<";
arDictionaryOne[">Subscription<"]=">الاشتراك<";

arDictionaryOne["> Theme <"]="> ثيمات <";
arDictionaryOne[">Dark<"]=">ليلى<";
arDictionaryOne[">White<"]=">صاطع<";

arDictionaryOne[">For More service contact us<"]=">لمزيد من الخدمات اتصل بنا<";
arDictionaryOne[">Arabicss services<"]=">خدمات أرابيكس<";
arDictionaryOne[">Send<"]=">إرسال<";
arDictionaryOne[">Call Center Solutions<"]=">حلول مركز الاتصال<";
arDictionaryOne[">IT Solutions<"]=">حلول تكنولوجيا المعلومات<";
arDictionaryOne[">System integration<"]=">نظام التكامل<";
arDictionaryOne[">Consultantion<"]=">استشارة<";
arDictionaryOne[">Other services<"]=">خدمات أخرى<";

arDictionaryOne['placeholder="Enter Name">']='placeholder="أدخل الاسم">';
arDictionaryOne['placeholder="Message">']='placeholder="الرسالة">';
arDictionaryOne['placeholder="Enter email">']='placeholder="أدخل البريد الإلكتروني">';
arDictionaryOne['placeholder="Search for...">']='placeholder="بحث عن ...">';

arDictionaryOne[">Arabicss Call Center <"]="> مركز اتصال أرابيكس <";
arDictionaryOne[">V 1.0.0<"]=">اصدار ١.٠<";
arDictionaryOne['<i class="mdi mdi-account-key"></i> Change Password </a>']='<i class="mdi mdi-account-key"></i> تغير كلمة المرور  </a>';
arDictionaryOne['<div class="dropdown-divider"></div> <a href="logout.php" class="dropdown-item"><i class="fa fa-power-off"></i> Logout </a>']=
'<div class="dropdown-divider"></div> <a href="logout.php" class="dropdown-item"><i class="fa fa-power-off"></i> تسجيل خروج </a>';
arDictionaryOne['<li><a href="index?module=Change_Password"><i class="mdi mdi-account-key"></i> Change password </a></li>']=
'<li><a href="index?module=Change_Password"><i class="mdi mdi-account-key"></i> تغيير كلمة المرور </a></li>';
arDictionaryOne['<li><a href="logout.php"><i class="fa fa-power-off"></i> Logout </a></li>']=
'<li><a href="logout.php"><i class="fa fa-power-off"></i> تسجيل خروج </a></li>';

  // first putting all the web page html tag into a string variable 
  function translateWebPagetoAr(){
    var str = document.getElementsByTagName("html")[0].innerHTML;

    arDictionaryOneLength = Object.keys(arDictionaryOne).length;

    for (let i = 0; i < arDictionaryOneLength; i++) {   
        
    }

    for (var key in arDictionaryOne) {
        var value = arDictionaryOne[key];
        str = str.replace(key, value)
    }
    document.getElementsByTagName("html")[0].innerHTML=str;
}

function translateWebPageToEn(){
    var str = document.getElementsByTagName("html")[0].innerHTML;
    arDictionaryOneLength = Object.keys(arDictionaryOne).length;


    for (let i = 0; i < arDictionaryOneLength; i++) {   
        
    }

    for (var key in arDictionaryOne) {
        var value = arDictionaryOne[key];
        str = str.replace(value, key)
    }
    document.getElementsByTagName("html")[0].innerHTML=str;

    
}



