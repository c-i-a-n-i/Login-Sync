# TG-restructuring
My very first project at BG, developed from start to finish with android studio
Mobile experience
THE LOGIN PAGE:
•	Customer logs in with his preloaded username and password
•	Customer is redirected to either the MIK welcome page or the ES welcome page based on his login details

THE MIK MODULE:
•	The welcome page consists of a welcome message and a brief summary of the functionalities of the MIK side of the app. It also displays the modify field, modify member, modify TG and view logs buttons
•	 These buttons redirect the MIK to the modification choice page which contains add, edit and delete for the modify field and modify member buttons, and merge and delete for the TGs

Modifying members:
•	On clicking the add button for modify members, the MIK is redirected to a data capture page which gets the IK number of the TG of the prospective member. The MIK enters this twice. He then also fills the various fields to get the customer’s biodata. When he is done, he clicks save. A dialog box comes up confirming the action. When he confirms it, the log is saved to the local database and a toast is displayed confirming the action has been performed and then the MIK is taken back to the MIK welcome page
•	On clicking the edit button for modify members, the MIK is redirected to a data capture page which gets the IK number, upon filling this field, the list of member names and IDs for that TG comes up. The member to be deleted is then selected, upon selection, the list of all the editable parameters for that member comes up along with text fields beside them to input the new values. A similar dialog box to that for the add button is called upon saving and similar logging and database actions are performed
•	On clicking the delete button for modify members, the MIK is redirected to a data capture page which gets the IK number and then the member ID of the member to be deleted. Upon selection of the member ID, the member biodata is displayed. Upon clicking of the delete button, a dialog box is pops up to confirm the action. Upon confirmation, the deletion log is entered into the database
Modifying fields:
•	On clicking the add button for modify fields, the MIK is redirected to a data capture page which gets the IK number and member ID. Upon selecting the member ID, the crop type selection field and the seed farm or not selection field are set to visible and editable. Upon clicking the add field button, the dialog box pops up, confirms and then the add log is added to the local log database
•	Upon clicking edit button for modify fields, the MIK is redirected to a data capture page which gets the IK number, upon filling this field, the list of member IDs comes up, upon filling this field, the list of field IDs comes up, upon clicking this field, the list of all editable field parameters for that field is displayed along with edit text fields for the new values. Upon clicking the save button, the dialog box pops up, confirms and then the edit log is added to the local log database
•	On clicking the delete button for modify fields, the MIK is redirected to a data capture page which gets the IK number, the member ID and then the field ID of the field to be deleted. Upon selection of the field ID, the field biodata is displayed. Upon clicking of the delete button, a dialog box is pops up to confirm the action. Upon confirmation, the deletion log is entered into the database

Modifying TGs:
•	Upon selecting the merge TG button, they are redirected to a data capture page which gets the IK numbers of the two TGs to be merged. The MIK is prevented from merging the same TG. When the save button is clicked, the confirmation dialog box pops up and the merge log is added to the local log database and saved
•	Upon selecting the delete TG button, they are redirected to a data capture page which gets the IK number of the TG to be deleted. Upon selecting the IK number and clicking the delete button, a confirmation dialog box pops up warning the MIK of the implications of his action, he then confirms the action and the deletion log is logged into the database
•	Viewing logs:
•	Upon clicking this button, the MIK is taken to the log viewer page which shows all the logs he has posted and their statuses.
•	For each log there is a recall option if the status of the log is not done. Upon clicking the recall button, another log is generated using that exact same log with the recall tag set as true.

THE ES MODULE:
•	The welcome page consists of a welcome message and a brief summary of the functionalities of the ES side of the app. It also displays the view logs button which redirects the user to the logs list
•	 On the logs list page, a list of all the logs sent from all the MIKs is displayed. These can be sorted and grouped according to actions (adds, deletes, edits), entities (member modifications, field modifications, TG modifications), working status (processing, done, recall) and so on.
•	Upon clicking any log, the ES analyst can work on it and change the status of the log from the default of unprocessed to processing to done.



System
Central to the implementation of this app is a log class. This log class serves as a data structure for each log entered into the system, taking in various Boolean data such as field tag, TG tag, member tag, delete tag, add tag, edit tag, etc. These tags are to enable sorting on the ES side of the app. Each log also has an auto-generated log ID, date and timestamp upon adding it to the database using the addlog() function. The log class also contains various functions for the various database operations that might be performed by the MIKs including: member deletion, field deletion, TG deletion, member addition, field addition, member edition, field edition and TG merging. Because of the vast nature of operations of the various log functions, several variables and data structures are used in the class. The log database itself is a database containing almost all the log class variables, it also contains a text string for each log which is auto generated by the various functions that perform operations on the log.
Modules
1.	Conceptualization, contemplation and planning
2.	UI/UX design of the various activities
3.	User login and verification
4.	MIK member addition
5.	MIK member edition
6.	MIK member deletion
7.	MIK field addition
8.	MIK field edition
9.	MIK field deletion
10.	MIK TG merging
11.	MIK TG deletion
12.	MIK log recall
13.	ES log status update
14.	ES log sorting functionality
15.	ES log grouping functionality

Database:
Centralized MySQL database online which synchronizes with the local SQLite databases on the phones of the MIKs and the ES analysts upon connection to the internet
