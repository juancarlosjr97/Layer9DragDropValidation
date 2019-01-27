# Layer9DragDropValidation

#### [DEMONSTRATION ONLINE HERE SOON](----)
#### [DEMONSTRATION VIDEO HERE SOON](----)

#### [DOWNLOAD REPOSITORY](https://codeload.github.com/juancarlosjr97/Layer9DragDropValidation/zip/master)

# DragDropValidation v1.0.0 stable is coming soon and full documentation

## Documentation and testing

### Requirements
* PHP 7.1.19 or above

### Libraries used

* [PhpSpreadsheet](https://phpspreadsheet.readthedocs.io/en/develop/)
* [DropZoneJS](https://www.dropzonejs.com)


### Usage
1. Upload a file
2. Click on Check files
3. If the file has an error, The system will print: the name of the file, how many errors, type of error and row of the error, and the file is will be delete from the server
4. If the file has been accepted, the name is going to change using the uploaded time and move to a folder called checked

### Features
* Scalable software
* Ingestion of a file through an online drag and drop feature into a staging area
* Convert XLSX to CSV
* Show if a file has an error or if the file has been accepted and uploaded
* Skip blank lines - Last added feature

### Validation of Columns

* invoicenumber - Yes
* servicedate - No
* financialperiod - Yes
* custid - No
* custname - No
* siteid - No
* sitename - No
* addr1 - No
* addr2 - No
* city - No
* postcode - No
* wastetype - No
* descr - No
* wastedescription - No
* ewccode - No
* disposalmode - No
* disposalmodedesc - No
* qty - No
* kgs - No
* tonnes - No
* costs- No

# Note:

* The functions for the all the columns has been created and what is missing are the conditions to validate the data of the remaining columns

* All the validation parameters has not been implemented it yet
* [More details of the validation please click here](https://docs.google.com/spreadsheets/d/1RUlmj6RuHILzwpnpVE1D_0wiXsMb0PGkirFrigjH-Lk/edit#gid=0)

### Missing features
* Upload the files via email and receive an email with the outcome of the validation
* If a file has empty lines, delete those empty lines
* Validation of all the columns

### Impediments
* The application was tested using a localhost, my php maximum execution time is limited (30 seconds)

### Used to build the application
* PHP - Server Side / Upload and Validation
* JavaScript Front-end / Drag and Drop

### Spreadsheet files supported
* CSV Files
* XLSX ( Excel)

### Browser tested
Chrome, Safari.

### Uploading Execution time - Tested using LocalHost
* XLSX provided by Layer 9 =  <1 second (Ten thousand lines empty that are read by the program)

* XLSX provided by Layer 9 without empty lines = <1 second

* 20 * XLSX provided by Layer 9 at the same time = 1.3 second (Ten thousand lines empty that are read by the program)

* 20 * XLSX provided by Layer 9 without empty lines at the same time = 1.1 second


### Validation Execution time - Tested using LocalHost
* XLSX provided by Layer 9 = 25 seconds (Ten thousand lines empty that are read by the program)

* XLSX provided by Layer 9 without empty lines = 2 seconds

* 20 * XLSX provided by Layer 9 at the same time = XX seconds (Ten thousand lines empty that are read by the program) - No tested yet, error of maximum and allowed memory sized exhausted

* 20 * XLSX provided by Layer 9 without empty lines at the same time = 36 seconds
