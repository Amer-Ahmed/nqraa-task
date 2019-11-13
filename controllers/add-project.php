<?php
    require_once(dirname( dirname(__FILE__) ) . "/common/my-config.php");
    if(isset($_POST['Project'])) 
    {
        $project_name = $_POST['Project']['project_name'];
        $program_name = $_POST['Project']['program_name'];
        $bid_number = $_POST['Project']['bid_number'];
        $authority = $_POST['Project']['authority'];
        $scheduledDatePrimaryReceipt=strtotime($_POST['Project']['scheduled_date_primary_receipt']);
        $scheduled_date_primary_receipt = date("Y-m-d",$scheduledDatePrimaryReceipt);
        $contract_value = $_POST['Project']['contract_value'];
        $contract_value_after_reduction = $_POST['Project']['contract_value_after_reduction'];
        $contract_value_after_increase = $_POST['Project']['contract_value_after_increase'];
        $contract_duration = $_POST['Project']['contract_duration'];
        $siteDeliveryDate=strtotime($_POST['Project']['site_delivery_date']);
        $site_delivery_date = date("Y-m-d",$siteDeliveryDate);
        $extension_contract_period = $_POST['Project']['extension_contract_period'];

        $technical_insurances_sensitivities = $_POST['Project']['technical_insurances_sensitivities'];
        $assets_insurances_sensitivities = $_POST['Project']['assets_insurances_sensitivities'];
        $safety_devices_site_safety = $_POST['Project']['safety_devices_site_safety'];
        $general_sensitivities = $_POST['Project']['general_sensitivities'];
        $delay_sensitivities = $_POST['Project']['delay_sensitivities'];
        $decrease_contract_sensitivities = $_POST['Project']['decrease_contract_sensitivities'];
        $deduct_advance_value = $_POST['Project']['deduct_advance_value'];

        $query  = "insert into projects (project_name,program_name,bid_number,authority,scheduled_date_primary_receipt,contract_value,contract_value_after_reduction,contract_value_after_increase,contract_duration,site_delivery_date,extension_contract_period) values ('$project_name','$program_name','$bid_number','$authority','$scheduled_date_primary_receipt','$contract_value','$contract_value_after_reduction','$contract_value_after_increase','$contract_duration','$site_delivery_date','$extension_contract_period');";

        $query .= "insert into total_values_executed_projects (technical_insurances_sensitivities,assets_insurances_sensitivities,safety_devices_site_safety,general_sensitivities,delay_sensitivities,decrease_contract_sensitivities,deduct_advance_value) values ('$technical_insurances_sensitivities','$assets_insurances_sensitivities','$safety_devices_site_safety','$general_sensitivities','$delay_sensitivities','$decrease_contract_sensitivities','$deduct_advance_value')";

        if (mysqli_multi_query($conn, $query)) {
            echo 'تم أضافة المشروع بنجاح.
                <br>
                  <a href="../view/add-project.php">العودة لأضافة مشروع أخر</a>';
        }
        else
        {
            echo "Data Not Saved";
            exit();
        }
    }
?>