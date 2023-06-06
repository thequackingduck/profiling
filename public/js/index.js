function onbtnStudentInsertFileIMPORTACTION() {
	
    console.log('onbtnStudentInsertFileIMPORTACTION');
	var timer = setTimeout(function() {
		onbtnStudentInsertFileIMPORTACTIONGO();
	}, 500);	
	return false;
}

function onbtnStudentInsertFileIMPORTACTIONGO() {
console.log('onbtnStudentInsertFileIMPORTACTIONGO');
	$('input#StudentInsertFileIMPORTACTIONGO').val('');
	var students = new Array();
	try {
			var xlsxflag = true; 
		
			if (typeof (FileReader) != "undefined") {  
			
				var reader = new FileReader();  
	
				reader.onload = function (e) {  
		
					//var data = e.target.result;  
					var result;
					var binary      = "";
					var all_rows_   = [];
			
					var data = new Uint8Array(e.target.result);							 

					var length_ = data.byteLength;

					for (var i = 0; i < length_; i++) {
					binary += String.fromCharCode(data[i]);
					}

					var workbook = XLSX.read(binary, {type: 'binary', cellDates:true, cellStyles:true});	 

					var sheet_name_list = workbook.SheetNames;  		

					sheet_name_list.forEach(function (y) {
					
						if (xlsxflag) {
							
							var exceljson = XLSX.utils.sheet_to_json(workbook.Sheets[y], {raw: true, defval:null});  
						
							if (exceljson.length > 0) {
								result = exceljson;
									
								for (var i = 0; i < exceljson.length; i++) {
									var row;	
									var columnSet   = []; 							
									var row_header_ = exceljson[i]; 
									var include_    = 0;
									var id 			= -1;
									for (var key in row_header_) {  
										if (row_header_.hasOwnProperty(key)) {  
											columnSet.push(key);  
										}  
									}

									var id_ 		= '';
									var l_name_ 	= '';
									var f_name_ 	= '';
									var m_name_ 	= '';
									var sex_ 		= '';
									var address_ 	= '';
									var birthdate_ 	= '';
									var course_ 	= '';
									var yearlevel_ 	= '';
									var units_		= '';
									var section_	= '';
																																				
									for (var colIndex = 0; colIndex < columnSet.length; colIndex++) {  
																												
										var cellValue  = exceljson[i][columnSet[colIndex]];  
										var cellTitle  = [columnSet[colIndex]];
										var cell_t_    = String(cellTitle);
										var cell_v_    = cellValue;
										include_       = 0;
											
										if (cellValue == null)  { cellValue = "";  }
																				
										if (cell_t_.toLowerCase().indexOf('id no.') > -1) {
											id_   = cell_v_;
										}									
											
										if (cell_t_.toLowerCase().indexOf('lastname') > -1) {
											l_name_   = cell_v_;
										}

										if (cell_t_.toLowerCase().indexOf('firstname') > -1) {
											f_name_   = cell_v_;
										}

										if (cell_t_.toLowerCase().indexOf('middlename') > -1) {
											m_name_   = cell_v_;
										}

										if (cell_t_.toLowerCase().indexOf('sex') > -1) {
											if(cell_v_ == "F" || cell_v_ == "Female" || cell_v_ == "FEMALE"){
												cell_v_   = "Female";
											}
											else{
												cell_v_	  = "Male";
											}
											sex_   = cell_v_;
										}

										if (cell_t_.toLowerCase().indexOf('address') > -1) {
											address_   = cell_v_;
										}

										if (cell_t_.toLowerCase().indexOf('date of birth') > -1) {
											birthdate_   = cell_v_;
										}

										if (cell_t_.toLowerCase().indexOf('course code') > -1) {
											course_   = cell_v_;
										}

										if (cell_t_.toLowerCase().indexOf('year level') > -1) {
											yearlevel_   = cell_v_;
										}

										if (cell_t_.toLowerCase().indexOf('total units') > -1) {
											units_   = cell_v_;
										}

										if (cell_t_.toLowerCase().indexOf('section') > -1) {
											section_   = cell_v_;
										}

										
									}

									students.push({
			                            stud_id: id_,
			                            last_name: l_name_,
			                            first_name: f_name_,
			                            middle_name: m_name_,
			                            sex: sex_,
										address: address_,
										birthdate: birthdate_,
										course: course_,
										year_level: yearlevel_,
										units: units_,
										section: section_
			                        });
									
									

									var json = JSON.stringify(students); 
	              					$('input#StudentInsertFileIMPORTACTIONGO').val(json);
									  console.log(students);
																	 
								}											
							}	
							else {
									alert('Error: Cannot read data on the XLSX file');
									document.getElementById('btnStudentInsertFileIMPORTACTION').value = "";
							}

						}  				 
					});  
				}  
				reader.readAsArrayBuffer($("#btnStudentInsertFileIMPORTACTION")[0].files[0]);  
			}  
			else {  
				alert("Sorry! Your browser does not support HTML5!");  
				document.getElementById('btnStudentInsertFileIMPORTACTION').value = "";
			}  
	}	
	catch (e) {
		alert('Error: ' + e.message);
		document.getElementById('btnStudentInsertFileIMPORTACTION').value = "";
	}
	
	return false;
}



function onbtnTestAnswersInsertFileIMPORTACTION() {
	
    console.log('onbtnTestAnswersInsertFileIMPORTACTION');
	var timer = setTimeout(function() {
		onbtnTestAnswersInsertFileIMPORTACTIONGO();
	}, 500);	
	return false;
}

function onbtnTestAnswersInsertFileIMPORTACTIONGO() {
console.log('onbtnTestAnswersInsertFileIMPORTACTIONGO');
	$('input#TestAnswersInsertFileIMPORTACTIONGO').val('');
	var answers = new Array();
	try {
			var xlsxflag = true; 
		
			if (typeof (FileReader) != "undefined") {  
			
				var reader = new FileReader();  
	
				reader.onload = function (e) {  
		
					//var data = e.target.result;  
					var result;
					var binary      = "";
					var all_rows_   = [];
			
					var data = new Uint8Array(e.target.result);							 

					var length_ = data.byteLength;

					for (var i = 0; i < length_; i++) {
					binary += String.fromCharCode(data[i]);
					}

					var workbook = XLSX.read(binary, {type: 'binary', cellDates:true, cellStyles:true});	 

					var sheet_name_list = workbook.SheetNames;  		

					sheet_name_list.forEach(function (y) {
					
						if (xlsxflag) {
							
							var exceljson = XLSX.utils.sheet_to_json(workbook.Sheets[y], {raw: true, defval:null});  
						
							if (exceljson.length > 0) {
								result = exceljson;
									
								for (var i = 0; i < exceljson.length; i++) {
									var row;	
									var columnSet   = []; 							
									var row_header_ = exceljson[i]; 
									var include_    = 0;
									var id 			= -1;
									for (var key in row_header_) {  
										if (row_header_.hasOwnProperty(key)) {  
											columnSet.push(key);  
										}  
									}

									var answer_ = '';
																																				
									for (var colIndex = 0; colIndex < columnSet.length; colIndex++) {  
																												
										var cellValue  = exceljson[i][columnSet[colIndex]];  
										var cellTitle  = [columnSet[colIndex]];
										var cell_t_    = String(cellTitle);
										var cell_v_    = cellValue;
										include_       = 0;
											
										if (cellValue == null)  { cellValue = "BONUS";  }
																				
										if (colIndex > -1 && colIndex < 1) {
											answer_   = cell_v_;
										}									
									}

									answers.push({
			                            ans: answer_
			                        });
									

									var json = JSON.stringify(answers); 
	              					$('input#TestAnswersInsertFileIMPORTACTIONGO').val(json);
																	 
								}											
							}	
							else {
									alert('Error: Cannot read data on the XLSX file');
									document.getElementById('btnTestAnswersInsertFileIMPORTACTION').value = "";
							}

						}  				 
					});  
				}  
				reader.readAsArrayBuffer($("#btnTestAnswersInsertFileIMPORTACTION")[0].files[0]);  
			}  
			else {  
				alert("Sorry! Your browser does not support HTML5!");  
				document.getElementById('btnTestAnswersInsertFileIMPORTACTION').value = "";
			}  
	}	
	catch (e) {
		alert('Error: ' + e.message);
		document.getElementById('btnTestAnswersInsertFileIMPORTACTION').value = "";
	}
	
	return false;
}

function onbtnStudenMarkstInsertFileIMPORTACTION() {
	
    console.log('onbtnStudenMarkstInsertFileIMPORTACTION');
	var timer = setTimeout(function() {
		onbtnStudenMarkstInsertFileIMPORTACTIONGO();
	}, 500);	
	return false;
}

function onbtnStudenMarkstInsertFileIMPORTACTIONGO() {
console.log('onbtnStudenMarkstInsertFileIMPORTACTIONGO');
	$('input#StudentMarksInsertFileIMPORTACTIONGO').val('');
	var answers = new Array();
	try {
			var xlsxflag = true; 
		
			if (typeof (FileReader) != "undefined") {  
			
				var reader = new FileReader();  
	
				reader.onload = function (e) {  
		
					//var data = e.target.result;  
					var result;
					var binary      = "";
					var all_rows_   = [];
			
					var data = new Uint8Array(e.target.result);							 

					var length_ = data.byteLength;

					for (var i = 0; i < length_; i++) {
					binary += String.fromCharCode(data[i]);
					}

					var workbook = XLSX.read(binary, {type: 'binary', cellDates:true, cellStyles:true});	 

					var sheet_name_list = workbook.SheetNames;

					sheet_name_list.forEach(function (y) {	
						if (xlsxflag) {

							var headers = [];
							var range = XLSX.utils.decode_range(workbook.Sheets[y]['!ref']);
							var C, R = range.s.r; /* start in the first row */
							/* walk every column in the range */
							for(C = range.s.c; C <= range.e.c; ++C) {
								var cell = workbook.Sheets[y][XLSX.utils.encode_cell({c:C, r:R})] /* find the cell in the first row */
		
								var hdr = "UNKNOWN " + C; // <-- replace with your desired default 
								if(cell && cell.t) hdr = XLSX.utils.format_cell(cell);
		
								headers.push(hdr);
							}
							
							var exceljson = XLSX.utils.sheet_to_json(workbook.Sheets[y], {raw: true, defval:null});  
							if (exceljson.length > 0) {

								var no_of_items = $('#NoOfItems').val();
								var n_item = 1;
								if(no_of_items > 0){
									if(headers){
										for (var i = 0; i < exceljson.length; i++) {
											var id_ = '';
											var item_ans = new Array();
	
											headers.forEach(function(header_){
												if (header_.toLowerCase().indexOf('id') > -1) {
													id_   = exceljson[i][header_];
												}else{
													if(n_item <= no_of_items){
														item_ans.push(exceljson[i][header_]);
													}
													n_item++;	
												}
											});
											answers.push({
												id: id_,
												ans: item_ans
											});
										}
										
										var json = JSON.stringify(answers); 
										$('input#StudentMarksInsertFileIMPORTACTIONGO').val(json);
									}
								}else{
									alert('Error: Please provide answer key first');
									document.getElementById('btnStudenMarkstInsertFileIMPORTACTION').value = "";
								}
							}	
							else {
								alert('Error: Cannot read data on the XLSX file');
								document.getElementById('btnStudenMarkstInsertFileIMPORTACTION').value = "";
							}

						}  				 
					});  
				}  
				reader.readAsArrayBuffer($("#btnStudenMarkstInsertFileIMPORTACTION")[0].files[0]);  
			}  
			else {  
				alert("Sorry! Your browser does not support HTML5!");  
				document.getElementById('btnStudenMarkstInsertFileIMPORTACTION').value = "";
			}  
	}	
	catch (e) {
		alert('Error: ' + e.message);
		document.getElementById('btnStudenMarkstInsertFileIMPORTACTION').value = "";
	}
	
	return false;
}

function onbtnQuestionsInsertFileIMPORTACTION() {
	
    console.log('onbtnQuestionsInsertFileIMPORTACTION');
	var timer = setTimeout(function() {
		onbtnQuestionsInsertFileIMPORTACTIONGO();
	}, 500);	
	return false;
}

function onbtnQuestionsInsertFileIMPORTACTIONGO() {
console.log('onbtnQuestionsInsertFileIMPORTACTIONGO');
	$('input#QuestionsInsertFileIMPORTACTIONGO').val('');
	var questions = new Array();
	try {
			var xlsxflag = true; 
		
			if (typeof (FileReader) != "undefined") {  
			
				var reader = new FileReader();  
	
				reader.onload = function (e) {  
		
					//var data = e.target.result;  
					var result;
					var binary      = "";
					var all_rows_   = [];
			
					var data = new Uint8Array(e.target.result);							 

					var length_ = data.byteLength;

					for (var i = 0; i < length_; i++) {
					binary += String.fromCharCode(data[i]);
					}

					var workbook = XLSX.read(binary, {type: 'binary', cellDates:true, cellStyles:true});	 

					var sheet_name_list = workbook.SheetNames;  		

					sheet_name_list.forEach(function (y) {
					
						if (xlsxflag) {
							
							var exceljson = XLSX.utils.sheet_to_json(workbook.Sheets[y], {raw: true, defval:null});  
						
							if (exceljson.length > 0) {
								result = exceljson;
									
								for (var i = 0; i < exceljson.length; i++) {
									var row;	
									var columnSet   = []; 							
									var row_header_ = exceljson[i]; 
									var include_    = 0;
									var id 			= -1;
									for (var key in row_header_) {  
										if (row_header_.hasOwnProperty(key)) {  
											columnSet.push(key);  
										}  
									}

									var question_ = '';
									var choice_a_ = '';
									var choice_b_ = '';
									var choice_c_ = '';
									var choice_d_ = '';
																																				
									for (var colIndex = 0; colIndex < columnSet.length; colIndex++) {  
																												
										var cellValue  = exceljson[i][columnSet[colIndex]];  
										var cellTitle  = [columnSet[colIndex]];
										var cell_t_    = String(cellTitle);
										var cell_v_    = cellValue;
										include_       = 0;
											
										if (cellValue == null)  { cellValue = "";  }
																				
										if (colIndex > -1 && colIndex < 1) {
											question_   = cell_v_;
										}									
											
										if (colIndex == 1) {
											choice_a_   = cell_v_;
										}

										if (colIndex == 2) {
											choice_b_   = cell_v_;
										}

										if (colIndex == 3) {
											choice_c_   = cell_v_;
										}

										if (colIndex == 4) {
											choice_d_   = cell_v_;
										}
									}

									questions.push({
			                            question: question_,
			                            choice_a: choice_a_,
			                            choice_b: choice_b_,
			                            choice_c: choice_c_,
			                            choice_d: choice_d_
			                        });
									

									var json = JSON.stringify(questions); 
	              					$('input#QuestionsInsertFileIMPORTACTIONGO').val(json);
																	 
								}											
							}	
							else {
									alert('Error: Cannot read data on the XLSX file');
									document.getElementById('btnQuestionsInsertFileIMPORTACTION').value = "";
							}

						}  				 
					});  
				}  
				reader.readAsArrayBuffer($("#btnQuestionsInsertFileIMPORTACTION")[0].files[0]);  
			}  
			else {  
				alert("Sorry! Your browser does not support HTML5!");  
				document.getElementById('btnQuestionsInsertFileIMPORTACTION').value = "";
			}  
	}	
	catch (e) {
		alert('Error: ' + e.message);
		document.getElementById('btnQuestionsInsertFileIMPORTACTION').value = "";
	}
	
	return false;
}


function onbtnOnlineTestQuestionsInsertFileIMPORTACTION() {
	
    console.log('onbtnOnlineTestQuestionsInsertFileIMPORTACTION');
	var timer = setTimeout(function() {
		onbtnOnlineTestQuestionsInsertFileIMPORTACTIONGO();
	}, 500);	
	return false;
}

function onbtnOnlineTestQuestionsInsertFileIMPORTACTIONGO() {
console.log('onbtnOnlineTestQuestionsInsertFileIMPORTACTIONGO');
	$('input#OnlineTestQuestionsInsertFileIMPORTACTIONGO').val('');
	var questions = new Array();
	try {
			var xlsxflag = true; 
		
			if (typeof (FileReader) != "undefined") {  
			
				var reader = new FileReader();  
	
				reader.onload = function (e) {  
		
					//var data = e.target.result;  
					var result;
					var binary      = "";
					var all_rows_   = [];
			
					var data = new Uint8Array(e.target.result);							 

					var length_ = data.byteLength;

					for (var i = 0; i < length_; i++) {
					binary += String.fromCharCode(data[i]);
					}

					var workbook = XLSX.read(binary, {type: 'binary', cellDates:true, cellStyles:true});	 

					var sheet_name_list = workbook.SheetNames;

					sheet_name_list.forEach(function (y) {	
						if (xlsxflag) {

							var headers = [];
							var range = XLSX.utils.decode_range(workbook.Sheets[y]['!ref']);
							var C, R = range.s.r; /* start in the first row */
							/* walk every column in the range */
							for(C = range.s.c; C <= range.e.c; ++C) {
								var cell = workbook.Sheets[y][XLSX.utils.encode_cell({c:C, r:R})] /* find the cell in the first row */
		
								var hdr = "UNKNOWN " + C; // <-- replace with your desired default 
								if(cell && cell.t) hdr = XLSX.utils.format_cell(cell);
		
								headers.push(hdr);
							}
							
							var exceljson = XLSX.utils.sheet_to_json(workbook.Sheets[y], {raw: true, defval:null});  
							if (exceljson.length > 0) {

								if(headers){
									for (var i = 0; i < exceljson.length; i++) {
										var no_ 		= '';
										var type_ 		= '';
										var num_inputs_ 	= '';
										var question_ 	= '';
										var desc_ 		= '';
										var choices_ 	= new Array();

										headers.forEach(function(header_){
											if (header_.toLowerCase().indexOf('item #') > -1) {
												no_   = exceljson[i][header_];
											}else if(header_.toLowerCase().indexOf('type') > -1){
												type_   = exceljson[i][header_];
											}
											else if(header_.toLowerCase().indexOf('no of input') > -1){
												num_inputs_   = exceljson[i][header_];
											}
											else if(header_.toLowerCase().indexOf('questions') > -1){
												question_   = exceljson[i][header_];
											}
											else if(header_.toLowerCase().indexOf('description') > -1){
												desc_   = exceljson[i][header_];
											}
											else{
												if((exceljson[i][header_])){
													choices_.push(exceljson[i][header_]);
												}
											}
										});
										questions.push({
											no: 		no_,
											type: 		type_,
											num_inputs: num_inputs_,
											question: 	question_,
											desc: 		desc_,
											choices: 	choices_
										});
									}

									var json = JSON.stringify(questions); 
									$('input#OnlineTestQuestionsInsertFileIMPORTACTIONGO').val(json);
								}else{
									alert('Error: Please provide answer key first');
									document.getElementById('btnOnlineTestQuestionsInsertFileIMPORTACTION').value = "";
								}
							}	
							else {
								alert('Error: Cannot read data on the XLSX file');
								document.getElementById('btnOnlineTestQuestionsInsertFileIMPORTACTION').value = "";
							}

						}  				 
					});  
				}  
				reader.readAsArrayBuffer($("#btnOnlineTestQuestionsInsertFileIMPORTACTION")[0].files[0]);  
			}  
			else {  
				alert("Sorry! Your browser does not support HTML5!");  
				document.getElementById('btnOnlineTestQuestionsInsertFileIMPORTACTION').value = "";
			}  
	}	
	catch (e) {
		alert('Error: ' + e.message);
		document.getElementById('btnOnlineTestQuestionsInsertFileIMPORTACTION').value = "";
	}
	
	return false;
}

function onbtnOnlineTestAnswersInsertFileIMPORTACTION() {
	
    console.log('onbtnOnlineTestAnswersInsertFileIMPORTACTION');
	var timer = setTimeout(function() {
		onbtnOnlineTestAnswersInsertFileIMPORTACTIONGO();
	}, 500);	
	return false;
}

function onbtnOnlineTestAnswersInsertFileIMPORTACTIONGO() {
console.log('onbtnOnlineTestAnswersInsertFileIMPORTACTIONGO');
	$('input#OnlineTestAnswersInsertFileIMPORTACTIONGO').val('');
	var answers = new Array();
	try {
			var xlsxflag = true; 
		
			if (typeof (FileReader) != "undefined") {  
			
				var reader = new FileReader();  
	
				reader.onload = function (e) {  
		
					//var data = e.target.result;  
					var result;
					var binary      = "";
					var all_rows_   = [];
			
					var data = new Uint8Array(e.target.result);							 

					var length_ = data.byteLength;

					for (var i = 0; i < length_; i++) {
					binary += String.fromCharCode(data[i]);
					}

					var workbook = XLSX.read(binary, {type: 'binary', cellDates:true, cellStyles:true});	 

					var sheet_name_list = workbook.SheetNames;

					sheet_name_list.forEach(function (y) {	
						if (xlsxflag) {

							var headers = [];
							var range = XLSX.utils.decode_range(workbook.Sheets[y]['!ref']);
							var C, R = range.s.r; /* start in the first row */
							/* walk every column in the range */
							for(C = range.s.c; C <= range.e.c; ++C) {
								var cell = workbook.Sheets[y][XLSX.utils.encode_cell({c:C, r:R})] /* find the cell in the first row */
		
								var hdr = "UNKNOWN " + C; // <-- replace with your desired default 
								if(cell && cell.t) hdr = XLSX.utils.format_cell(cell);
		
								headers.push(hdr);
							}
							
							var exceljson = XLSX.utils.sheet_to_json(workbook.Sheets[y], {raw: true, defval:null});  
							if (exceljson.length > 0) {

								if(headers){
									for (var i = 0; i < exceljson.length; i++) {
										var no_ 		= '';
										var points_ 		= '';
										var ans_ 	= new Array();

										headers.forEach(function(header_){
											if (header_.toLowerCase().indexOf('item #') > -1) {
												no_   = exceljson[i][header_];
											}else if(header_.toLowerCase().indexOf('points(each answer)') > -1){
												points_   = exceljson[i][header_];
											}
											else{
												if((exceljson[i][header_])){
													ans_.push(exceljson[i][header_]);
												}
											}
										});
										answers.push({
											no: 		no_,
											points: 	points_,
											ans: 		ans_
										});
									}
									
									var json = JSON.stringify(answers); 
									$('input#OnlineTestAnswersInsertFileIMPORTACTIONGO').val(json);
								}else{
									alert('Error: Please provide answer key first');
									document.getElementById('btnOnlineTestAnswersInsertFileIMPORTACTION').value = "";
								}
							}	
							else {
								alert('Error: Cannot read data on the XLSX file');
								document.getElementById('btnOnlineTestAnswersInsertFileIMPORTACTION').value = "";
							}

						}  				 
					});  
				}  
				reader.readAsArrayBuffer($("#btnOnlineTestAnswersInsertFileIMPORTACTION")[0].files[0]);  
			}  
			else {  
				alert("Sorry! Your browser does not support HTML5!");  
				document.getElementById('btnOnlineTestAnswersInsertFileIMPORTACTION').value = "";
			}  
	}	
	catch (e) {
		alert('Error: ' + e.message);
		document.getElementById('btnOnlineTestAnswersInsertFileIMPORTACTION').value = "";
	}
	
	return false;
}