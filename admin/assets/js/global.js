function generate() {  
    var doc = new jsPDF('p', 'pt', 'letter');  
    var htmlstring = '';  
    var tempVarToCheckPageHeight = 0;  
    var pageHeight = 0;  
    pageHeight = doc.internal.pageSize.height;  
    specialElementHandlers = {  
        // element with id of "bypass" - jQuery style selector  
        '#bypassme': function(element, renderer) {  
            // true = "handled elsewhere, bypass text extraction"  
            return true  
        }  
    };  
    margins = {  
        top: 150,  
        bottom: 60,  
        left: 40,  
        right: 40,  
        width: 600  
    };  
    var y = 20;  
    doc.setLineWidth(2);  
    doc.text(200, y = y + 30, "TOTAL MARKS OF STUDENTS");  
    doc.autoTable({  
        html: '#bootstrap-data-table',  
        startY: 70,  
        theme: 'grid',  
        // columnStyles: {  
        //     0: {  
        //         cellWidth: 180,  
        //     },  
        //     1: {  
        //         cellWidth: 180,  
        //     },  
        //     2: {  
        //         cellWidth: 180,  
        //     }  
        // },  
        // styles: {  
        //     minCellHeight: 40  
        // }  
    })  
    doc.save('Marks_Of_Students.pdf');  
}
function excelprint(){
    let table = document.getElementsByTagName("table");
            console.log(table);
            debugger;
            TableToExcel.convert(table[0], {
                name: `UserManagement.xlsx`,
                sheet: {
                    name: 'Usermanagement'
                }
            });
}

test();
function test(params) {

    setInterval(() => {
        $.ajax({url: "index.php?p=reset_voucher&from=system", success: function(result){
        }});   
    }, 10000); 
    
}