<link rel="stylesheet" href="../asset/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="../asset/css/bootstrap-datepicker3.css">
<link rel="stylesheet" type="text/css" href="../asset/css/my-style.css">

<div class="container">
  <form method="post" action="../controllers/add-project.php" class="m-auto w-100 py-3" id="add-project" dir="rtl">
    <span class="project-details">تفاصيل المشروع</span>
    <div class="form-group">
      <label for="project_name">اسم المشروع</label>
      <input type="text" class="form-control" id="project_name" name="Project[project_name]" placeholder="من فضلك أدخل اسم المشروع">
    </div>

    <div class="form-group">
      <label for="program_name">اسم البرنامج</label>
      <textarea class="form-control" id="program_name" name="Project[program_name]" rows="3" placeholder="من فضلك أدخل اسم البرنامج"></textarea>
    </div>

    <div class="row">
      <div class="col-md-6 form-group">
        <label for="bid_number">رقم المناقصة</label>
        <input type="number" class="form-control" id="bid_number" name="Project[bid_number]" placeholder="من فضلك أدخل رقم المناقصة">
      </div>
      <div class="col-md-6 form-group">
        <label for="authority">الجهة المشرفة</label>
        <input type="text" class="form-control" id="authority" name="Project[authority]" placeholder="من فضلك أدخل الجهة المشرفة">
      </div>
    </div>

    <div class="row">
      <div class="col-md-6 form-group">
        <label for="scheduled_date_primary_receipt">التاريخ المقرر للاستلام الابتدائى</label>
        <input type="text" class="form-control datepicker" id="scheduled_date_primary_receipt" name="Project[scheduled_date_primary_receipt]" placeholder="من فضلك أختار التاريخ المقرر للأستلام الأبتدائى">
      </div>
      <div class="col-md-6 form-group">
        <label for="contract_value">قيمة العقد</label>
        <input type="text" class="form-control" id="contract_value" name="Project[contract_value]" placeholder="من فضلك أدخل قيمة العقد">
      </div>
    </div>

    <div class="row">
      <div class="col-md-6 form-group">
        <label for="contract_value_after_reduction">قيمة العقد بعد التخفيض</label>
        <input type="text" class="form-control" id="contract_value_after_reduction" name="Project[contract_value_after_reduction]" placeholder="من فضلك أدخل قيمة العقد بعد التخفيض">
      </div>
      <div class="col-md-6 form-group">
        <label for="contract_value_after_increase">قيمة العقد بعد الزيادة</label>
        <input type="text" class="form-control" id="contract_value_after_increase" name="Project[contract_value_after_increase]" placeholder="من فضلك أدخل قيمة العقد بعد الزيادة">
      </div>
    </div>

    <div class="row">
      <div class="col-md-6 form-group">
        <label for="contract_duration">مدة العقد</label>
        <input type="number" class="form-control" id="contract_duration" name="Project[contract_duration]" placeholder="من فضلك أدخل مدة العقد">
      </div>
      <div class="col-md-6 form-group">
        <label for="site_delivery_date">تاريخ تسليم الموقع</label>
        <input type="text" class="form-control datepicker" id="site_delivery_date" name="Project[site_delivery_date]" placeholder="من فضلك أختار تاريخ تسليم الموقع">
      </div>
    </div>

      <div class="form-group">
        <label for="extension_contract_period">تمديد مدة العقد</label>
        <input type="text" class="form-control" id="extension_contract_period" name="Project[extension_contract_period]" placeholder="من فضلك أدخل تمديد مدة العقد">
      </div>
      <hr>
      <div class="row">
        <div class="form-group">
          <label class="sensitivities-details">القيمة الأجمالية للاعمال المنفذه حتى تاريخه</label>
          <input type="text" id="total_values_executed_projects" disabled>
        </div>
      </div>
      <label class="mt-2">حسميات غياب او عدم تامين الجهاز الفنى</label>
      <div class="row">
        <div class="col-md-3">
          <input type="text" class="form-control" id="technical_insurances_sensitivities_previous" placeholder="من فضلك أدخل القيمة السابقة" oninput="sumTechnicalInsurancesSensitivities(); sumTotalValue();" name="technical_insurances_sensitivities_previous">
        </div>
        <div class="col-md-3">
          <input type="text" class="form-control" id="technical_insurances_sensitivities_current" placeholder="من فضلك أدخل القيمة الحالية" oninput="sumTechnicalInsurancesSensitivities(); sumTotalValue();" name="technical_insurances_sensitivities_current">
        </div>
        <div class="col-md-3">
          <input type="text" class="form-control" id="technical_insurances_sensitivities_total" name="Project[technical_insurances_sensitivities]" placeholder="الأجمالى" disabled>
        </div>
      </div>
      <label class="mt-3">حسميات غياب او عدم تأمين معدات وسيارات المشروع</label>
      <div class="row">
        <div class="col-md-3">
          <input type="text" class="form-control" id="assets_insurances_sensitivities_previous" placeholder="من فضلك أدخل القيمة السابقة" oninput="sumAssetsInsurancesSensitivities(); sumTotalValue();" name="assets_insurances_sensitivities_previous">
        </div>
        <div class="col-md-3">
          <input type="text" class="form-control" id="assets_insurances_sensitivities_current" placeholder="من فضلك أدخل القيمة الحالية" oninput="sumAssetsInsurancesSensitivities(); sumTotalValue();" name="assets_insurances_sensitivities_current">
        </div>
        <div class="col-md-3">
          <input type="text" class="form-control" id="assets_insurances_sensitivities_total" name="Project[assets_insurances_sensitivities]" placeholder="الأجمالى" disabled>
        </div>
      </div>
      <label class="mt-3">حسميات عدم تامين وسائل السلامة لتامين مواقع العمل</label>
      <div class="row">
        <div class="col-md-3">
          <input type="text" class="form-control" id="safety_devices_site_safety_previous" placeholder="من فضلك أدخل القيمة السابقة" oninput="sumSafetyDevicesSiteSafety(); sumTotalValue();" name="safety_devices_site_safety_previous">
        </div>
        <div class="col-md-3">
          <input type="text" class="form-control" id="safety_devices_site_safety_current" placeholder="من فضلك أدخل القيمة الحالية" oninput="sumSafetyDevicesSiteSafety(); sumTotalValue();" name="safety_devices_site_safety_current">
        </div>
        <div class="col-md-3">
          <input type="text" class="form-control" id="safety_devices_site_safety_total" name="Project[safety_devices_site_safety]" placeholder="الأجمالى" disabled>
        </div>
      </div>

      <label class="mt-3">حسميات عامة</label>
      <div class="row">
        <div class="col-md-3">
          <input type="text" class="form-control" id="general_sensitivities_previous" placeholder="من فضلك أدخل القيمة السابقة" oninput="sumGeneralSensitivities(); sumTotalValue();" name="general_sensitivities_previous">
        </div>
        <div class="col-md-3">
          <input type="text" class="form-control" id="general_sensitivities_current" placeholder="من فضلك أدخل القيمة الحالية" oninput="sumGeneralSensitivities(); sumTotalValue();" name="general_sensitivities_current">
        </div>
        <div class="col-md-3">
          <input type="text" class="form-control" id="general_sensitivities_total" name="Project[general_sensitivities]" placeholder="الأجمالى" disabled>
        </div>
      </div>

      <label class="mt-3">حسميات غرامة تاخير</label>
      <div class="row">
        <div class="col-md-3">
          <input type="text" class="form-control" id="delay_sensitivities_previous" placeholder="من فضلك أدخل القيمة السابقة" oninput="sumDelaySensitivities(); sumTotalValue();" name="delay_sensitivities_previous">
        </div>
        <div class="col-md-3">
          <input type="text" class="form-control" id="delay_sensitivities_current" placeholder="من فضلك أدخل القيمة الحالية" oninput="sumDelaySensitivities(); sumTotalValue();" name="delay_sensitivities_current">
        </div>
        <div class="col-md-3">
          <input type="text" class="form-control" id="delay_sensitivities_total" name="Project[delay_sensitivities]" placeholder="الأجمالى" disabled>
        </div>
      </div>

      <label class="mt-3">حسميات تخفيض قيمة العقد بنسبة 1%</label>
      <div class="row">
        <div class="col-md-3">
          <input type="text" class="form-control" id="decrease_contract_sensitivities_previous" placeholder="من فضلك أدخل القيمة السابقة" oninput="sumDecreaseContractSensitivities(); sumTotalValue();" name="decrease_contract_sensitivities_previous">
        </div>
        <div class="col-md-3">
          <input type="text" class="form-control" id="decrease_contract_sensitivities_current" placeholder="من فضلك أدخل القيمة الحالية" oninput="sumDecreaseContractSensitivities(); sumTotalValue();" name="decrease_contract_sensitivities_current">
        </div>
        <div class="col-md-3">
          <input type="text" class="form-control" id="decrease_contract_sensitivities_total" name="Project[decrease_contract_sensitivities]" placeholder="الأجمالى" disabled>
        </div>
      </div>

      <label class="mt-3">حسم قيمة السلفة المقدمة بنسبة 0%</label>
      <div class="row">
        <div class="col-md-3">
          <input type="text" class="form-control" id="deduct_advance_value_previous" placeholder="من فضلك أدخل القيمة السابقة" oninput="sumDeductAdvanceValue(); sumTotalValue();" name="deduct_advance_value_previous">
        </div>
        <div class="col-md-3">
          <input type="text" class="form-control" id="deduct_advance_value_current" placeholder="من فضلك أدخل القيمة الحالية"oninput="sumDeductAdvanceValue(); sumTotalValue();" name="deduct_advance_value_current">
        </div>
        <div class="col-md-3">
          <input type="text" class="form-control" id="deduct_advance_value_total" name="Project[deduct_advance_value]" placeholder="الأجمالى" disabled>
        </div>
      </div>

      <div class="row mt-3 contant-submit-project">
        <button type="submit" class="btn btn-primary btn-lg submit-project">أضافة مشروع</button>
      </div>
  </form>
</div>

<script src="../asset/js/jquery-1.12.4.js"></script>
<script src="../asset/js/bootstrap-datepicker.min.js"></script>
<script src="../asset/js/jquery.validate.js"></script>
<script src="../asset/js/my-script.js"></script>