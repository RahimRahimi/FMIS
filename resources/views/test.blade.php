<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Select2 Multi-Select Example</title>
  {{--
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> --}}
  <link rel="stylesheet" href="{{asset('css/ltr/all.min.css')}}" type="text/css" id="stylesheet">
  <script src="{{asset('js/Jquery/jquery.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('js/BootstrapJS/bootstrap.bundle.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
  {{--
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/css/select2.min.css"> --}}
  {{-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> --}}
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/js/select2.min.js"></script> --}}
  <script src="{{asset('js/Select2/select2.min.js')}}"></script>
  <script src="{{asset('js/Select2/form_select2.js')}}"></script>
</head>

<body>

  <div class="container mt-4">
    <label for="mySelect2">Select Options:</label>
    <select id="mySelect2" class="form-control" multiple="multiple">
      <option value="selectAll">Select All</option>
      <option value="1">Option 1</option>
      <option value="2">Option 2</option>
      <option value="3">Option 3</option>
      <!-- Add more options as needed -->
    </select>
    <form action="{{route('test.post')}}" method="post" id="myForm">
      @csrf
      <label for="mySelect">Select Options:</label>
      <select id="mySelect" multiple="multiple" name="selectedOptions[]">
        <option value="all" selected>All Options</option>
        <option value="option1">Option 1</option>
        <option value="option2">Option 2</option>
        <option value="option3">Option 3</option>
        <option value="option4">Option 4</option>
        <option value="option5">Option 5</option>
        <!-- Add more options as needed -->
      </select>
      <input type="text" name="my_input" id="" value="sometext" disabled>
      <input type="submit" value="submit">
      <button type="button" onclick="resetForm()">Reset</button>

    </form>
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
                    $(this).val(allOptionValues);

                    // Trigger the change event for each option
                    allOptionValues.forEach(function (value) {
                        $('#mySelect2').find('option[value="' + value + '"]').trigger('change');
                    });
                }
            });
        });
  </script>
  {{-- <script>
    $(document).ready(function() {
          $('#mySelect').select2();
        
          $('#mySelect').on('change', function() {
            var selectedValues = $(this).val();
        
            // Check if "all" is selected, then set selectedValues to all options
            if (selectedValues && selectedValues.includes('all')) {
              selectedValues = ['option1', 'option2', 'option3']; // Replace with your actual option values
            }
        
            console.log(selectedValues);
        
            // Now, you can use the selectedValues array as needed
          });
        });
  </script> --}}
  {{-- <script>
    $(document).ready(function() {
          $('#mySelect').select2();
        
          $('#myForm').submit(function(event) {
            var selectedValues = $('#mySelect').val();
        
            // Check if "all" is selected, then set selectedValues to all options
            if (selectedValues && selectedValues.includes('all')) {
              selectedValues = ['option1', 'option2', 'option3']; // Replace with your actual option values
            }
        
            // Create a hidden input field and set its value to the selected values
            var hiddenInput = $('<input>').attr({
              type: 'hidden',
              name: 'selectedValues',
              value: JSON.stringify(selectedValues)
            });
        
            // Append the hidden input to the form
            $('#myForm').append(hiddenInput);
        
            // You can remove the "all" option from the selected values if needed
            var index = selectedValues.indexOf('all');
            if (index !== -1) {
              selectedValues.splice(index, 1);
            }
        
            // Now, you can use the selectedValues array as needed
        
            // If you want to prevent the default form submission, you can uncomment the following line
            // event.preventDefault();
          });
        });
  </script> --}}

  {{-- <script>
    $(document).ready(function() {
        $('#mySelect').select2();
      
        $('#myForm').submit(function(event) {
          var selectedValues = $('#mySelect').val();
      
          // Check if "all" is selected, then set selectedValues to all options
          if (selectedValues && selectedValues.includes('all')) {
            selectedValues = ['option1', 'option2', 'option3']; // Replace with your actual option values
          }
      
          // Create a hidden input field and set its value to the selected values
          var hiddenInput = $('<input>').attr({
            type: 'hidden',
            name: 'selectedValues[]', // Use '[]' to indicate an array in the form data
            value: selectedValues
          });
      
          // Append the hidden input to the form
          $('#myForm').append(hiddenInput);
      
          // You can remove the "all" option from the selected values if needed
          var index = selectedValues.indexOf('all');
          if (index !== -1) {
            selectedValues.splice(index, 1);
          }
      
          // Now, you can use the selectedValues array as needed
      
          // If you want to prevent the default form submission, you can uncomment the following line
          // event.preventDefault();
        });
      });
  </script> --}}
  {{-- <script>
    $(document).ready(function() {
          $('#mySelect').select2();
        
          $('#myForm').submit(function(event) {
            var selectedValues = $('#mySelect').val();
        
            // Check if "all" is selected, then set selectedValues to all options
            if (selectedValues && selectedValues.includes('all')) {
              selectedValues = ['option1', 'option2', 'option3']; // Replace with your actual option values
            }
        
            // Convert selectedValues to an array
            selectedValues = Array.isArray(selectedValues) ? selectedValues : [selectedValues];
        
            // Create a hidden input field and set its value to the selected values
            var hiddenInput = $('<input>').attr({
              type: 'hidden',
              name: 'selectedValues[]', // Use '[]' to indicate an array in the form data
              value: selectedValues.join(',')
            });
        
            // Append the hidden input to the form
            $('#myForm').append(hiddenInput);
        
            // You can remove the "all" option from the selected values if needed
            var index = selectedValues.indexOf('all');
            if (index !== -1) {
              selectedValues.splice(index, 1);
            }
        
            // Now, you can use the selectedValues array as needed
        
            // If you want to prevent the default form submission, you can uncomment the following line
            // event.preventDefault();
          });
        });
  </script> --}}

  {{-- <script>
    $(document).ready(function() {
          $('#mySelect').select2();
        
          $('#myForm').submit(function(event) {
            var selectedValues = $('#mySelect').val();
        
            // Check if "all" is selected, then set selectedValues to all options
            if (selectedValues && selectedValues.includes('all')) {
              selectedValues = ['option1', 'option2', 'option3']; // Replace with your actual option values
            }
        
            // Convert selectedValues to an array
            selectedValues = Array.isArray(selectedValues) ? selectedValues : [selectedValues];
        
            // Create a hidden input field for each selected value
            for (var i = 0; i < selectedValues.length; i++) {
              var hiddenInput = $('<input>').attr({
                type: 'hidden',
                name: 'selectedValues[]',
                value: selectedValues[i]
              });
        
              // Append each hidden input to the form
              $('#myForm').append(hiddenInput);
            }
        
            // You can remove the "all" option from the selected values if needed
            var index = selectedValues.indexOf('all');
            if (index !== -1) {
              selectedValues.splice(index, 1);
            }
        
            // Now, you can use the selectedValues array as needed
        
            // If you want to prevent the default form submission, you can uncomment the following line
            // event.preventDefault();
          });
        });
  </script> --}}
  {{-- <script>
    $(document).ready(function() {
          $('#mySelect').select2();
        
          $('#myForm').submit(function(event) {
            var selectedValues = $('#mySelect').val();
        
            // Check if "all" is selected, then set selectedValues to all options
            if (selectedValues && selectedValues.includes('all')) {
              selectedValues = ['option1', 'option2', 'option3']; // Replace with your actual option values
            }
        
            // Remove the "all" option from the selected values if present
            var index = selectedValues.indexOf('all');
            if (index !== -1) {
              selectedValues.splice(index, 1);
            }
        
            // Convert selectedValues to an array
            selectedValues = Array.isArray(selectedValues) ? selectedValues : [selectedValues];
        
            // Create a hidden input field for each selected value
            for (var i = 0; i < selectedValues.length; i++) {
              var hiddenInput = $('<input>').attr({
                type: 'hidden',
                name: 'selectedValues[]',
                value: selectedValues[i]
              });
        
              // Append each hidden input to the form
              $('#myForm').append(hiddenInput);
            }
        
            // Now, you can use the selectedValues array as needed
        
            // If you want to prevent the default form submission, you can uncomment the following line
            // event.preventDefault();
          });
        });
  </script> --}}
  {{-- <script>
    $(document).ready(function() {
          $('#mySelect').select2();
        
          $('#myForm').submit(function(event) {
            var selectedValues = $('#mySelect').val();
        
            // Check if "all" is selected, then set selectedValues to all options
            if (selectedValues && selectedValues.includes('all')) {
              selectedValues = $('#mySelect').find('option[value!="all"]').map(function() {
                return $(this).val();
              }).get();
            }
        
            // Remove the "all" option from the selected values if present
            var index = selectedValues.indexOf('all');
            if (index !== -1) {
              selectedValues.splice(index, 1);
            }
        
            // Convert selectedValues to an array
            selectedValues = Array.isArray(selectedValues) ? selectedValues : [selectedValues];
        
            // Create a hidden input field for each selected value
            for (var i = 0; i < selectedValues.length; i++) {
              var hiddenInput = $('<input>').attr({
                type: 'hidden',
                name: 'selectedValues[]',
                value: selectedValues[i]
              });
        
              // Append each hidden input to the form
              $('#myForm').append(hiddenInput);
            }
        
            // Now, you can use the selectedValues array as needed
        
            // If you want to prevent the default form submission, you can uncomment the following line
            // event.preventDefault();
          });
        });
  </script> --}}
  {{-- <script>
    $(document).ready(function() {
          var mySelect = $('#mySelect').select2();
        
          mySelect.on('change', function() {
            var selectedValues = mySelect.val();
        
            // Check if "all" is selected
            if (selectedValues && selectedValues.includes('all')) {
              // Disable all other options
              mySelect.find('option[value!="all"]').prop('disabled', true);
            } else {
              // Enable all options
              mySelect.find('option').prop('disabled', false);
            }
          });
        
          $('#myForm').submit(function(event) {
            var selectedValues = mySelect.val();
        
            // Check if "all" is selected, then set selectedValues to all options
            if (selectedValues && selectedValues.includes('all')) {
              selectedValues = mySelect.find('option[value!="all"]').map(function() {
                return $(this).val();
              }).get();
            }
        
            // Remove the "all" option from the selected values if present
            var index = selectedValues.indexOf('all');
            if (index !== -1) {
              selectedValues.splice(index, 1);
            }
        
            // Convert selectedValues to an array
            selectedValues = Array.isArray(selectedValues) ? selectedValues : [selectedValues];
        
            // Create a hidden input field for each selected value
            for (var i = 0; i < selectedValues.length; i++) {
              var hiddenInput = $('<input>').attr({
                type: 'hidden',
                name: 'selectedValues[]',
                value: selectedValues[i]
              });
        
              // Append each hidden input to the form
              $('#myForm').append(hiddenInput);
            }
        
            // Now, you can use the selectedValues array as needed
        
            // If you want to prevent the default form submission, you can uncomment the following line
            // event.preventDefault();
          });

          function resetForm() {
            // Clear selected values and trigger change event
            $('#mySelect').val(null).trigger('change');

            // Enable all options
            $('#mySelect').find('option').prop('disabled', false);
            
            // Remove hidden input fields
            $('#myForm').find('input[name="selectedValues[]"]').remove();
            }
        });
  </script> --}}
  <script>
    $(document).ready(function() {

          
        });
        

  </script>

</body>

</html>