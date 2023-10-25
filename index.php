<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Performance</title>
    <link rel="stylesheet" href="output.css">
</head>

<body class="m-4">
    <?php
    $name = "Luis Suizo";

    $details = array ("Home", "Subjects", "Assignment", "Quiz", "About");

    $programmingLanguages = array(
        array("HTML, CSS, and JavaScript", "PHP", "ASP.NET"),
        array("Android", "iOS", "Windows"),
        array("Java", "C#", "Python")
    );
    ?>

    <header class="bg-[#015e7d]">
        <div class="text-white h-20 flex items-center justify-end">
            <h1 class="font-bold text-2xl text-right pr-8"><?= $name ?></h1>
        </div>
    </header>

    <main class="md:grid md:grid-cols-4 md:gap-4 mt-4">
        <?php includeTable("person.png", "Name: $name", $details); ?>
        <?php includeTable("computer.png", "Web Programming", $programmingLanguages[0]); ?>
        <?php includeTable("phone.png", "Mobile Programming", $programmingLanguages[1]); ?>
        <?php includeTable("java.png", "Desktop Programming", $programmingLanguages[2]); ?>
    </main>
</body>

<?php
function includeTable($imageSource, $headerText, $data)
{
    ?>
    <div class="border-8 border-[#f7b732] max-w-full">
        <img class="w-[50%] md:w-full m-auto md:m-0" src="<?= $imageSource ?>" alt="">
        <table class="mx-2 mb-4">
            <thead>
                <tr class="bg-[#005792]">
                    <th class="text-white w-screen text-base lg:text-xl h-10">
                        <h1 class="text-left pl-4"><?= $headerText ?></h1>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $item): ?>
                    <tr class="bg-[#1da3bb] border-t-8 border-white">
                        <td class="text-white w-screen text-base lg:text-xl h-10 mt-4">
                            <h1 class="pl-4"><?= $item ?></h1>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?php
}
?>
</html>