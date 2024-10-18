<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Вземане на данните от формата
    $fname = htmlspecialchars(trim($_POST['FName']));
    $lname = htmlspecialchars(trim($_POST['LName']));
    $email = filter_var(trim($_POST['Email']), FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars(trim($_POST['Subject']));
    $message = htmlspecialchars(trim($_POST['msg']));



    $errors = []; // Масив за грешки

    $everything = $fname || $lname || $email || $message;

    if (empty($everything)) {
        $errors[] = "Моля, попълнете бланката";
    }

    // Проверка за име
    else if (empty($fname)) {
        $errors[] = "Моля, въведете вашето Първо име.";
    } elseif (strlen($fname) < 2) {
        $errors[] = "Името трябва да съдържа поне 2 символа.";
    }

    // Проверка за фамилия
    else if (empty($lname)) {
        $errors[] = "Моля, въведете вашата Фамилия.";
    } elseif (strlen($lname) < 2) {
        $errors[] = "Името трябва да съдържа поне 2 символа.";
    }

    // Проверка за валиден имейл
    else if (empty($email)) {
        $errors[] = "Моля, въведете имейл.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Моля, въведете валиден имейл адрес.";
    }

    // Проверка за съобщение
    else if (empty($message)) {
        $errors[] = "Моля, въведете съобщение.";
    } elseif (strlen($message) < 10) {
        $errors[] = "Съобщението трябва да съдържа поне 10 символа.";
    }

    /* Ако има грешки, те се показват
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color: red;'>$error</p>";
        }*/

      else {
        // Ако няма грешки, се изпраща имейл
        $to = "your-email@example.com";
        $subject = "Ново съобщение от $fname . $lname";
        $email_content = "Име: $name\n";
        $email_content .= "Имейл: $email\n\n";
        $email_content .= "Съобщение:\n$message\n";

        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";

        if (mail($to, $subject, $email_content, $headers)) {
            echo "<p style='color: green;'>Съобщението е изпратено успешно!</p>";
        } else {
            // Ако mail() не успее да изпрати имейла
            echo "<p style='color: red;'>Възникна проблем при изпращане на съобщението. Моля, опитайте отново по-късно.</p>";
        }
    }
} else {
    echo "<p style='color: red;'>Формата не е изпратена правилно.</p>";
    
}