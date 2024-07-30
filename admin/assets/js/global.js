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
        $.ajax({url: "index.php?c=controller&p=reset_voucher&from=system", success: function(result){
        }});   
    }, 10000); 
    
}

function myvoucher() {
        
    var txtSecondNumberValue = document.getElementById('txt2').value;
    var voucher              = document.getElementById('voucher').value;
    console.log(voucher);
    if (voucher == 'aktif' && txtSecondNumberValue <= 60000) {
        $("#voucheraktif").show();
        $("#vouchergaaktif").hide();
    }else{
        $("#voucheraktif").hide();
        $("#vouchergaaktif").show();
    }
}

function convertrp(id) {
    value = $("#"+id).val();
    console.log(keyuprp(value));
    $("#"+id).val(keyuprp(value));
}

function keyuprp(angka, prefix)
{
    var number_string = angka.replace(/[^,\d]/g, '').toString(),
        split    = number_string.split(','),
        sisa     = split[0].length % 3,
        rupiah     = split[0].substr(0, sisa),
        ribuan     = split[0].substr(sisa).match(/\d{3}/gi);
        
    if (ribuan) {
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
    }
    
    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
}