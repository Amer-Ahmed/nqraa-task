$(document).ready(function(){
    $( ".datepicker" ).datepicker({
      format: 'yyyy-mm-dd',
      todayHighlight: true,
      autoclose: true,
      orientation: "right"
    });
    $("#add-project").validate({    
        rules: {
            'Project[project_name]':'required',
            'Project[program_name]':'required',
            'Project[bid_number]':'required',
            'Project[authority]':'required',
            'Project[scheduled_date_primary_receipt]':'required',
            'Project[contract_value]':'required',
            'Project[contract_value_after_reduction]':'required',
            'Project[contract_value_after_increase]':'required',
            'Project[contract_duration]':'required',
            'Project[site_delivery_date]':'required',
            'Project[extension_contract_period]':'required',

            'technical_insurances_sensitivities_previous':'required',
            'technical_insurances_sensitivities_current':'required',
            'assets_insurances_sensitivities_previous':'required',
            'assets_insurances_sensitivities_current':'required',
            'safety_devices_site_safety_previous':'required',
            'safety_devices_site_safety_current':'required',
            'general_sensitivities_previous':'required',
            'general_sensitivities_current':'required',
            'delay_sensitivities_previous':'required',
            'delay_sensitivities_current':'required',
            'decrease_contract_sensitivities_previous':'required',
            'decrease_contract_sensitivities_current':'required',
            'deduct_advance_value_previous':'required',
            'deduct_advance_value_current':'required'
        },
        messages :{
          'Project[project_name]':'من فضلك أدخل أسم المشروع',
          'Project[program_name]':'من فضلك أدخل أسم البرنامج',
          'Project[bid_number]':'من فضلك أدخل رقم المناقصة',
          'Project[authority]':'من فضلك أدخل الجهة المشرفة',
          'Project[scheduled_date_primary_receipt]':'من فضلك أدخل التاريخ المقرر للأستلام الابتذائي',
          'Project[contract_value]':'من فضلك أدخل قيمة العقد',
          'Project[contract_value_after_reduction]':'من فضلك أدخل قيمة العقد بعد التخفيض',
          'Project[contract_value_after_increase]':'من فضلك أدخل قيمة العقد بعد الزيادة',
          'Project[contract_duration]':'من فضلك أدخل مدة العقد',
          'Project[site_delivery_date]':'من فضلك أدخل أسم البرنامج',
          'Project[extension_contract_period]':'من فضلك أدخل تمديد مده العقد',

          'technical_insurances_sensitivities_previous':'من فضلك أدخل القيمة السابقة',
          'technical_insurances_sensitivities_current':'من فضلك أدخل القيمة الحالية',
          'assets_insurances_sensitivities_previous':'من فضلك أدخل القيمة السابقة',
          'assets_insurances_sensitivities_current':'من فضلك أدخل القيمة الحالية',
          'safety_devices_site_safety_previous':'من فضلك أدخل القيمة السابقة',
          'safety_devices_site_safety_current':'من فضلك أدخل القيمة الحالية',
          'general_sensitivities_previous':'من فضلك أدخل القيمة السابقة',
          'general_sensitivities_current':'من فضلك أدخل القيمة الحالية',
          'delay_sensitivities_previous':'من فضلك أدخل القيمة السابقة',
          'delay_sensitivities_current':'من فضلك أدخل القيمة الحالية',
          'decrease_contract_sensitivities_previous':'من فضلك أدخل القيمة السابقة',
          'decrease_contract_sensitivities_current':'من فضلك أدخل القيمة الحالية',
          'deduct_advance_value_previous':'من فضلك أدخل القيمة السابقة',
          'deduct_advance_value_current':'من فضلك أدخل القيمة الحالية'
        }
    });
});
$('#add-project').submit(function(){
    $("#add-project :disabled").removeAttr('disabled');
});

function sumTechnicalInsurancesSensitivities() 
{
  var previous = document.getElementById("technical_insurances_sensitivities_previous").value;

  var current = document.getElementById("technical_insurances_sensitivities_current").value;
  var total = +previous + +current;
  document.getElementById('technical_insurances_sensitivities_total').value = total;
}
function sumAssetsInsurancesSensitivities() 
{
  var previous = document.getElementById("assets_insurances_sensitivities_previous").value;

  var current = document.getElementById("assets_insurances_sensitivities_current").value;
  var total = +previous + +current;
  document.getElementById('assets_insurances_sensitivities_total').value = total;
}

function sumSafetyDevicesSiteSafety() 
{
  var previous = document.getElementById("safety_devices_site_safety_previous").value;

  var current = document.getElementById("safety_devices_site_safety_current").value;
  var total = +previous + +current;
  document.getElementById('safety_devices_site_safety_total').value = total;
}

function sumGeneralSensitivities() 
{
  var previous = document.getElementById("general_sensitivities_previous").value;

  var current = document.getElementById("general_sensitivities_current").value;
  var total = +previous + +current;
  document.getElementById('general_sensitivities_total').value = total;
}

function sumDelaySensitivities() 
{
  var previous = document.getElementById("delay_sensitivities_previous").value;

  var current = document.getElementById("delay_sensitivities_current").value;
  var total = +previous + +current;
  document.getElementById('delay_sensitivities_total').value = total;
}

function sumDecreaseContractSensitivities() 
{
  var previous = document.getElementById("decrease_contract_sensitivities_previous").value;

  var current = document.getElementById("decrease_contract_sensitivities_current").value;
  var total = +previous + +current;
  document.getElementById('decrease_contract_sensitivities_total').value = total;
}

function sumDeductAdvanceValue() 
{
  var previous = document.getElementById("deduct_advance_value_previous").value;

  var current = document.getElementById("deduct_advance_value_current").value;
  var total = +previous + +current;
  document.getElementById('deduct_advance_value_total').value = total;
}
function sumTotalValue()
{
  var old_total_value = document.getElementById('total_values_executed_projects').value;
      old_total_value.value = '';
  var technical_insurances_sensitivities_total = document.getElementById('technical_insurances_sensitivities_total').value;
  var assets_insurances_sensitivities_total = document.getElementById('assets_insurances_sensitivities_total').value;
  var safety_devices_site_safety_total = document.getElementById('safety_devices_site_safety_total').value;
  var general_sensitivities_total = document.getElementById('general_sensitivities_total').value;
  var delay_sensitivities_total = document.getElementById('delay_sensitivities_total').value;
  var decrease_contract_sensitivities_total = document.getElementById('decrease_contract_sensitivities_total').value;
  var deduct_advance_value_total = document.getElementById('deduct_advance_value_total').value;

  var new_total_value = 
      +technical_insurances_sensitivities_total + +assets_insurances_sensitivities_total + 
      +safety_devices_site_safety_total + +general_sensitivities_total + 
      +delay_sensitivities_total + +decrease_contract_sensitivities_total + 
      +deduct_advance_value_total;
  document.getElementById('total_values_executed_projects').value = new_total_value; 
}
