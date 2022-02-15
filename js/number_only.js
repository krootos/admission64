// JavaScript Document

function chkNumber(ele)
            {
                var vchar = String.fromCharCode(event.keyCode);
                if ((vchar<'0' || vchar>'9')) return false;
                ele.onKeyPress=vchar;
            }

function chkNumberAndDot(ele)
            {
                var vchar = String.fromCharCode(event.keyCode);
                if ((vchar<'0' || vchar>'9') && (vchar != '.')) return false;
                ele.onKeyPress=vchar;
            }

