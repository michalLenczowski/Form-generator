<script>
$(document).ready(function () {
            document.getElementById("copyinpt").addEventListener("click", function () {
                copyToClipboardMsg(document.getElementById("copyTarget"), "msg");
            });
 
 
            function copyToClipboardMsg(elem, msgElem) {
                var succeed = copyToClipboard(elem);
                var msg;
                if (!succeed) {
                    msg = "Copy not supported or blocked.  Press Ctrl+c to copy."
                } else {
                    msg = "Kod został skopiowany"
                }
                if (typeof msgElem === "string") {
                    msgElem = document.getElementById(msgElem);
                }
                msgElem.innerHTML = msg;
                setTimeout(function () {
                    msgElem.innerHTML = "";
                }, 2000);
            }
 
            function copyToClipboard(elem) {
                
                var targetId = "_hiddenCopyText_";
                var isInput = elem.tagName === "INPUT" || elem.tagName === "TEXTAREA";
                var origSelectionStart, origSelectionEnd;
                if (isInput) {
                    
                    target = elem;
                    origSelectionStart = elem.selectionStart;
                    origSelectionEnd = elem.selectionEnd;
                } else {
                    
                    target = document.getElementById(targetId);
                    if (!target) {
                        var target = document.createElement("textarea");
                        target.style.position = "absolute";
                        target.style.left = "-8000px";
                        target.style.top = "0";
                        target.id = targetId;
                        document.body.appendChild(target);
                    }
                    target.textContent = elem.textContent;
                }
                
                var currentFocus = document.activeElement;
                target.focus();
                target.setSelectionRange(0, target.value.length);
 
               
                var succeed;
                try {
                    succeed = document.execCommand("copy");
                } catch (e) {
                    succeed = false;
                }
                
                if (currentFocus && typeof currentFocus.focus === "function") {
                    currentFocus.focus();
                }
 
                if (isInput) {
                   
                    elem.setSelectionRange(origSelectionStart, origSelectionEnd);
                } else {
                  
                    target.textContent = "";
                }
                return succeed;
            } 
        });
    </script>

<div class="row" >                        
        <div class="flat-panel" ng-controller="calykodctrl">
            <div class="flat-panel-header">
                <p class="flat-panel-heading">Wygenerowany kod</p>
            </div>
            <div class="flat-panel-body" >
                <div class="row text-center">
                <div class="col-md-10 col-xs-12" >
                <div class="well" >                                     
                        <ul  id="copyTarget"  class="list-unstyled link-list"><li class="inpt" ng-repeat="inpts in agnd.calyform" >{{inpts}}<br><br></li></ul>
                     </div><br>
                     <div >
                        <input type="button" id="copyinpt" class="btn btn-info" value="Skopiuj całość" /><br><br><br>
                      <p id="msg"></p>
                    </div></div>                             
                </div>

                </div>
</div>
</div>
     