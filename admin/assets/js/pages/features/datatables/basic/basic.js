/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
var __webpack_exports__ = {};
/*!****************************************************************!*\
  !*** ../demo1/src/js/pages/features/datatables/basic/basic.js ***!
  \****************************************************************/

var KTDatatablesBasicBasic = function() {

	var initTable1 = function() {
		var table = $('#student_datatable');

		// begin first table
		table.DataTable({
			responsive: false,
			// scrollX: true,
			// DOM Layout settings
			dom: `<'row'<'col-sm-12'tr>>
                  <'row'<'col-sm-12 col-md-5 font-weight-bold d-flex align-items-center'li><'col-sm-12 col-md-7 dataTables_pager'p>>`,

			lengthMenu: [5, 10, 25, 50],
			pageLength: 20,

			language: {
				'lengthMenu': '_MENU_',
				'emptyTable': '데이터가 없어요.',
				'lengthMenu': "_MENU_",
				'info': "/ 총 _TOTAL_건",
				'infoEmpty': "데이터 없음",
				'infoFiltered': "( _MAX_건의 데이터에서 필터링됨 )",
				'search': "",
				'zeroRecords': "일치하는 데이터가 없어요.",
				'loadingRecords': "로딩중...",
				'processing': "잠시만 기다려 주세요...",
				'paginate': {
					'next': '<i class="fa fa-angle-right icon-xs"></i>',
					'previous': '<i class="fa fa-angle-left icon-xs"></i>'
				}
			},

			// Order settings
			order: [[1, 'asc']],

			headerCallback: function(thead, data, start, end, display) {
				thead.getElementsByTagName('th')[0].innerHTML = `
                    <label class="checkbox checkbox-single">
                        <input type="checkbox" value="" class="group-checkable"/>
                        <span></span>
                    </label>`;
			},

			columnDefs: [
				{
					targets: 0,
					width: '15px',
					className: 'dt-left',
					orderable: false,
					render: function(data, type, full, meta) {
						return `
                        <label class="checkbox checkbox-single">
                            <input type="checkbox" value="" class="checkable"/>
                            <span></span>
                        </label>`;
					},
				},
				{
					targets: -1,
					title: '',
					orderable: false,
					width: '110px',
					render: function(data, type, full, meta) {
						return '\
	                        <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Edit details">\
	                            <i class="la la-edit"></i>\
	                        </a>\
	                        <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete">\
							    <i class="la la-trash"></i>\
	                        </a>\
	                    ';
					},
				},
			],
		});

		table.on('change', '.group-checkable', function() {
			var set = $(this).closest('table').find('td:first-child .checkable');
			var checked = $(this).is(':checked');

			$(set).each(function() {
				if (checked) {
					$(this).prop('checked', true);
					$(this).closest('tr').addClass('active');
				}
				else {
					$(this).prop('checked', false);
					$(this).closest('tr').removeClass('active');
				}
			});
		});

		table.on('change', 'tbody tr .checkbox', function() {
			$(this).parents('tr').toggleClass('active');
		});
	};

	// var initTable2 = function() {
	// 	var table = $('#kt_datatable_2');

	// 	// begin first table
	// 	table.DataTable({
	// 		responsive: true,

	// 		// DOM Layout settings
	// 		dom: `<'row'<'col-sm-12'tr>>
	// 		<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>`,

	// 		lengthMenu: [5, 10, 25, 50],

	// 		pageLength: 10,

	// 		language: {
	// 			'lengthMenu': 'Display _MENU_',
	// 		},

	// 		// Order settings
	// 		order: [[1, 'desc']],

	// 		headerCallback: function(thead, data, start, end, display) {
	// 			thead.getElementsByTagName('th')[0].innerHTML = `
    //                 <label class="checkbox checkbox-single">
    //                     <input type="checkbox" value="" class="group-checkable"/>
    //                     <span></span>
    //                 </label>`;
	// 		},

	// 		columnDefs: [
	// 			{
	// 				targets: 0,
	// 				width: '30px',
	// 				className: 'dt-left',
	// 				orderable: false,
	// 				render: function(data, type, full, meta) {
	// 					return `
    //                     <label class="checkbox checkbox-single">
    //                         <input type="checkbox" value="" class="checkable"/>
    //                         <span></span>
    //                     </label>`;
	// 				},
	// 			},
	// 			{
	// 				targets: 7,
	// 				title: 'Actions',
	// 				orderable: false,
	// 				width: '125px',
	// 				render: function(data, type, full, meta) {
	// 					return '\
	//                         <a href="javascript:;" class="btn btn-sm btn-clean btn-icon mr-2" title="Edit details">\
	//                             <span class="svg-icon svg-icon-md">\
	//                                 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
	//                                     <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
	//                                         <rect x="0" y="0" width="24" height="24"/>\
	//                                         <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero"\ transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "/>\
	//                                         <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"/>\
	//                                     </g>\
	//                                 </svg>\
	//                             </span>\
	//                         </a>\
	//                         <a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete">\
	//                             <span class="svg-icon svg-icon-md">\
	//                                 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
	//                                     <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
	//                                         <rect x="0" y="0" width="24" height="24"/>\
	//                                         <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"/>\
	//                                         <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>\
	//                                     </g>\
	//                                 </svg>\
	//                             </span>\
	//                         </a>\
	//                     ';
	// 				},
	// 			},
				
	// 		],
	// 	});

	// 	table.on('change', '.group-checkable', function() {
	// 		var set = $(this).closest('table').find('td:first-child .checkable');
	// 		var checked = $(this).is(':checked');

	// 		$(set).each(function() {
	// 			if (checked) {
	// 				$(this).prop('checked', true);
	// 				$(this).closest('tr').addClass('active');
	// 			}
	// 			else {
	// 				$(this).prop('checked', false);
	// 				$(this).closest('tr').removeClass('active');
	// 			}
	// 		});
	// 	});

	// 	table.on('change', 'tbody tr .checkbox', function() {
	// 		$(this).parents('tr').toggleClass('active');
	// 	});
	// };

	return {

		//main function to initiate the module
		init: function() {
			initTable1();
			initTable2();
		}
	};
}();

jQuery(document).ready(function() {
	KTDatatablesBasicBasic.init();
});

/******/ })()
;
//# sourceMappingURL=basic.js.map