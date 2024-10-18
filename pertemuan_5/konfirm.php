<?php
    if (isset($_POST['submit'])) {
        if (!empty($_POST['hobbies'])) {
            // Tampilkan hobi yang dipilih
            echo "<h2>Hobi Anda:</h2>";

            $hobbies = $_POST['hobbies'];
            $hobby_count = count($hobbies);

            // Handling the case when there's only one hobby
            if ($hobby_count == 1) {
                echo htmlspecialchars($hobbies[0]);
            } else {
                // Join the hobbies into a string with commas and "dan" before the last item
                echo implode(', ', array_slice($hobbies, 0, -1)) . ' dan ' . htmlspecialchars(end($hobbies));
            }
        } else {
            echo "<b>Harap pilih setidaknya satu hobi.</b>";
        }

        // Format and display the birthdate
        $date = new DateTime($_POST['birthdate']);
        echo "<p>Tanggal lahir anda: " . $date->format('d F Y') . "</p>";

        // Display the current date
        $tgl_skr = new DateTime();
        echo "<p>Tanggal hari ini: " . $tgl_skr->format('d F Y') . "</p>";

        // Calculate the age
        $age_diff = $tgl_skr->diff($date);
        $age = $age_diff->y;  // 'y' is the number of full years
        echo "<p>Berarti umur Anda sudah " . $age . " tahun.</p>";
    }
?>
