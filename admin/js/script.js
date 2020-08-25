jQuery(document).ready(function($){


   /*     function getPDFFileButton () {
            // Select which div with id that need to be printed
            // to print body $('body')
            // here printing div with content id $("#content")
            // using html canvas to save as required pdf to image to preserve css
            return html2canvas($('#pdf'), {
                background: "#ffffff",
                onrendered: function(canvas) {
                    var myImage = canvas.toDataURL("image/jpeg,1.0");
                    // Adjust width and height
                    var imgWidth = (canvas.width * 20) / 120;
                    var imgHeight = (canvas.height * 20) / 120; 
                    // jspdf changes
                    var pdf = new jsPDF('p', 'mm', 'a4');
                    pdf.addImage(myImage, 'JPEG', 11, 2, imgWidth, imgHeight); // 2: 19
                    pdf.save('Download.pdf');
                }
            });
        }       
        $("#pdfDownloader").on("click", function () {
            getPDFFileButton ()
        });
	*/
 function getPDF(){
 console.log('getting')
 var HTML_Width = $("#pdf").width();
 var HTML_Height = $("#pdf").height();
 var top_left_margin = 15;
 var PDF_Width = HTML_Width+(top_left_margin*2);
 var PDF_Height = (PDF_Width*1.5)+(top_left_margin*2);
 var canvas_image_width = HTML_Width;
 var canvas_image_height = HTML_Height;
 
 var totalPDFPages = Math.ceil(HTML_Height/PDF_Height)-1;
 
 
 html2canvas($("#pdf")[0],{allowTaint:true}).then(function(canvas) {
 canvas.getContext('2d');
 
 console.log(canvas.height+"  "+canvas.width);
 
 
 var imgData = canvas.toDataURL("image/jpeg", 1.0);
 var pdf = new jsPDF('p', 'pt',  [PDF_Width, PDF_Height]);
     pdf.addImage(imgData, 'JPG', top_left_margin, top_left_margin,canvas_image_width,canvas_image_height);
 
 
 for (var i = 1; i <= totalPDFPages; i++) { 
 pdf.addPage(PDF_Width, PDF_Height);
 pdf.addImage(imgData, 'JPG', top_left_margin, -(PDF_Height*i)+(top_left_margin*4),canvas_image_width,canvas_image_height);
 }
 
     pdf.save("HTML-Document.pdf");
        });
 }
        $("#pdfDownloader").on("click", function () {
            getPDF ()
        });

})