<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select2 Multi-Select Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/css/select2.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/js/select2.min.js"></script>
</head>
<body>

    <div class="container mt-4">
        <label for="mySelect2">Select Options:</label>
        {{-- <select id="mySelect2" class="form-control" multiple="multiple">
            <option value="selectAll">Select All</option>
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
            <!-- Add more options as needed -->
        </select>
    </div>

    <script>
        $(document).ready(function () {
            // Initialize Select2
            $('#mySelect2').select2();

            // Handle the change event
            $('#mySelect2').on('change', function (e) {
                var selectedValue = $(this).val();

                // If "Select All" is selected, select all options except "Select All"
                if (selectedValue && selectedValue.includes('selectAll')) {
                    // Get all option values except "selectAll"
                    var allOptionValues = $(this).find('option[value!="selectAll"]').map(function () {
                        return $(this).val();
                    }).get();

                    // Select all options
                    $(this).val(allOptionValues).trigger('change');
                }
            });
        });
    </script> --}}
    <select id="mySelect" multiple="multiple">
        <option value="all">All Options</option>
        <option value="option1">Option 1</option>
        <option value="option2">Option 2</option>
        <option value="option3">Option 3</option>
        <!-- Add more options as needed -->
      </select>
    </div>
      
      
     
      

</body>
</html>