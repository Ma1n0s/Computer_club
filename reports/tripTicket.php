<?
     require('fpdf/fpdf.php');
     require('fpdf/makefont/makefont.php');
     require_once('../Sql/connect.php');
     session_start();

     

    if (isset($_SESSION['ClientId'])) {
        $sql = "SELECT * FROM `client` WHERE `id_client` = ?";
        $edit = $pdo->prepare($sql);
        $edit->execute(array("$_SESSION[ClientId]"));
        $lineRepPass = $edit->fetch();

        $sql = "SELECT * FROM `korzina` INNER JOIN `tovar` ON `korzina`.`id_tovar` = `tovar`.`id_tovar` WHERE `id_client` = ?";
        $edit = $pdo->prepare($sql);
        $edit->execute(array("$_SESSION[ClientId]"));
        $lineRepPass2 = $edit->fetchAll();


        $arText["Title"] = "Прокат - Снежная территория"; 
        $arText["txtDate"] = "Дата: ".date("m.d.y");
        $arText["txtNameOrg"] = "Организация: ООО Прокат Снежная территория 620026, г. Нижний Тагил, ул. Ленина, 1"; 
        $arText["txtСarBrand"] = "Телефон: " . $lineRepPass['phone']; 
        $arText["txtStateNumber"] = "№ клиента: ".$lineRepPass['id_client']; 
        $arText["txtDriver"] = "Арендатор: " . $lineRepPass['fio']; 
        $arText["txtString"] = "Предрейсовый контроль технического состояния транспортного средства провёл"; 
        $arText["txtStringAddress"] = "Адрес: ул. Ленина, 1"; 
        $arText["txtStringDate"] = "Дата: ".date("m.d.y");
        $arText["txtStringFIO"] = "Подпись ___________________ ФИО ___________________"; 

        foreach($arText as &$text){
            $text = iconv('utf-8', 'windows-1251', $text);
        }

        $pdf = new FPDF();
        $pdf->AddFont('Manrope-Regular', '', "Manrope-Regular.php");

        $pdf->AddPage();

        $pdf->SetFont('Manrope-Regular', '', 16); 

        $pdf->Cell(50, 10, '', 0, 0); 
        $pdf->Cell(59, 5, $arText["Title"], 0, 0); 
        $pdf->Cell(59, 10, '', 0, 1); 
        
        $pdf->SetFont('Manrope-Regular', '', 12); 

        $pdf->Cell(10, 10, '', 0, 0); 
        $pdf->Cell(59, 5, $arText["txtDate"], 0, 0); 
        $pdf->Cell(59, 10, '', 0, 1); 

        $pdf->Cell(10, 10, '', 0, 0); 
        $pdf->Cell(59, 5, $arText["txtСarBrand"], 0, 0); 
        $pdf->Cell(59, 10, '', 0, 1); 

        $pdf->Cell(10, 10, '', 0, 0); 
        $pdf->Cell(59, 5, $arText["txtStateNumber"], 0, 0); 
        $pdf->Cell(59, 10, '', 0, 1); 

        $pdf->Cell(10, 10, '', 0, 0); 
        $pdf->Cell(59, 5, $arText["txtDriver"], 0, 0); 
        $pdf->Cell(59, 10, '', 0, 1); 

        $pdf->Cell(10, 10, '', 0, 1); //пустая строка для отступа после таблицы

        $sum = 0;
        foreach($lineRepPass2 as $data){
            $sum+=$data['Price'];
            $name = iconv('utf-8', 'windows-1251', "Снаряжение: ".$data['Name']);
            $price = iconv('utf-8', 'windows-1251', "Цена: ".$data['Price'].". Арендовано на ".$data['Count']." суток");
            $pdf->Cell(10, 10, '', 0, 0); 
            $pdf->Cell(59, 5, $name, 0, 0); 
            $pdf->Cell(59, 10, '', 0, 1); 

            $pdf->Cell(10, 10, '', 0, 0); 
            $pdf->Cell(59, 5, $price, 0, 0); 
            $pdf->Cell(59, 10, '', 0, 1); 
            $pdf->Cell(10, 10, '', 0, 1); //пустая строка для отступа после таблицы
        }
        


        $pdf->Cell(10, 10, '', 0, 1); //пустая строка для отступа после таблицы

        // $pdf->Cell(10, 10, '', 0, 0); 
        // $pdf->Cell(59, 5, $arText["txtString"], 0, 0); 
        // $pdf->Cell(59, 10, '', 0, 1); 

        $name = iconv('utf-8', 'windows-1251', "Итого: ".$sum." .руб");

        $pdf->Cell(10, 10, '', 0, 0); 
        $pdf->Cell(59, 5, $name, 0, 0); 
        $pdf->Cell(59, 10, '', 0, 1); 


        $pdf->Cell(10, 10, '', 0, 1); //пустая строка для отступа после таблицы


        $pdf->Cell(10, 10, '', 0, 0); 
        $pdf->Cell(59, 5, $arText["txtNameOrg"], 0, 0); 
        $pdf->Cell(59, 10, '', 0, 1); 

        $pdf->Cell(10, 10, '', 0, 0); 
        $pdf->Cell(59, 5, $arText["txtStringAddress"], 0, 0); 
        $pdf->Cell(59, 10, '', 0, 1); 

        $pdf->Cell(10, 10, '', 0, 0); 
        $pdf->Cell(59, 5, $arText["txtStringDate"], 0, 0); 
        $pdf->Cell(59, 10, '', 0, 1); 

        $pdf->Cell(10, 10, '', 0, 0); 
        $pdf->Cell(59, 5, $arText["txtStringFIO"], 0, 0); 
        $pdf->Cell(59, 10, '', 0, 1); 

        $pdf->Output(); 



        require_once('../Sql/zakaz.php');
    }