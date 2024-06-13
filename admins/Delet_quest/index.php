<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Questionnaire</title>
    <script>
        function deleteQuestionnaire() {
            const id = document.getElementById('id_questionnaire').value;
            if (!id) {
                alert('Please enter a questionnaire ID');
                return;
            }

            const formData = new FormData();
            formData.append('id_questionnaire', id);

            fetch('delete_questionnaire.php', {
                method: 'POST',
                body: formData,
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Questionnaire deleted successfully');
                } else {
                    alert('Failed to delete questionnaire');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred while deleting the questionnaire');
            });
        }
    </script>
</head>
<body>
    <h1>Delete Questionnaire</h1>
    <label for="id_questionnaire">Questionnaire ID:</label>
    <input type="text" id="id_questionnaire" name="id_questionnaire">
    <button type="button" onclick="deleteQuestionnaire()">Delete</button>
</body>
</html>
