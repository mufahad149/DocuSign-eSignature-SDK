<?php 

?>

<!DOCTYPE html">
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/senddocuments.css" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script type="text/javascript" src="js/jquery-1.4.4.js"></script>
        <script type="text/javascript" src="js/jquery.ui.core.js"></script>
        <script type="text/javascript" src="js/Utils.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                activate();
            });
        </script>
    </head>
    <body>
        <form action="">
            <input id="subject" type="text" placeholder="<enter the subject>" autocomplete=off />
            <p></p>
            <input id="emailBlurb" type="text" placeholder="<enter e-mail blurb>" autocomplete=off />
            <p></p>
            <table class="recipientList">
                <tr class="recipientListHeader">
                    <th>Recipient</th>
                    <th>E-mail</th>
                    <th>Security</th>
                    <th>Send E-mail Invite</th>
                </tr>
                <tr>
                    <td>Bill Clinton</td>
                    <td>bill@clinton.com</td>
                    <td>None</td>
                    <td>
                        <ul class="switcher">
                            <li id="RecipientInviteon1" class="active"><a href="#" title="On">ON</a></li>
                            <li id="RecipientInviteoff1"><a href="#" title="OFF">OFF</a></li>
                            <input id="RecipientInviteToggle1" name="RecipientInviteToggle1" value="RecipientInviteToggle1" type="checkbox" style="display:none" checked/> 
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>George Bush</td>
                    <td>george@bush.com</td>
                    <td><select id="RecipientSecurity1" name="RecipientSecurity1" onchange="javascript:EnableDisableInput(1)">
                <option value="None">None</option>
                <option value="AccessCode">Access Code:</option>
                <option value="PhoneAuthentication">Phone Authentication</option>
                </select><input id="RecipientSecuritySetting1" type="text" name="RecipientSecuritySetting1" style="display:none;"/></td>
                    <td>
                        <ul class="switcher">
                            <li id="RecipientInviteon2" class="active"><a href="#" title="On">ON</a></li>
                            <li id="RecipientInviteoff2"><a href="#" title="OFF">OFF</a></li> 
                            <input id="RecipientInviteToggle2" name="RecipientInviteToggle2" value="RecipientInviteToggle2" type="checkbox" style="display:none" checked/> 
                        </ul>

                    </td>
                </tr>
                <tr>
                    <td>Jimmy Carter</td>
                    <td>jimmy@carter.com</td>
                    <td>Phone</td>
                    <td>
                        <ul class="switcher">
                            <li id="RecipientInviteon2" class="active"><a href="#" title="On">ON</a></li>
                            <li id="RecipientInviteoff2"><a href="#" title="OFF">OFF</a></li>
                            <input id="RecipientInviteToggle2" name="RecipientInviteToggle2" value="RecipientInviteToggle2" type="checkbox" style="display:none" checked/> 
                        </ul>
                    </td>
                </tr>
            </table>
            <div id="files">
                <p>Document #1: <input class="upload" id="file1" type="file"  /></p>
                <p>Document #2: <input class="upload" id="file2" type="file"  /></p>
            </div>
            <table class="optionlist">
                <tr>
                    <td><input id="stockdoc" class="options" type="checkbox" value="stockdoc" name="stockdoc"
                    onclick="EnableDisableDiv()" /> Use a stock doc</td>
                    <td rowspan="3"><input type="date" /><br />Add Daily Reminders</td>
                </tr>   
                <tr>
                    <td><input class="options" type="checkbox" name="sendoption" value="addsig" /> Add Signatures</td>
                </tr>   
                <tr>
                    <td><input class="options" type="checkbox" name="sendoption" value="addformfield" /> Add Form Fields</td>
                </tr>   
                <tr>
                    <td><input class="options" type="checkbox" name="sendoption" value="addcondfield" /> Add Conditional Fields</td>
                    <td rowspan="3"><input type="date" /><br />Add Expiration</td>
                </tr>   
                <tr>
                    <td><input class="options" type="checkbox" name="sendoption" value="addcollfield" /> Add Collaborative Fields</td>
                </tr>   
                <tr>
                    <td><input class="options" type="checkbox" name="sendoption" value="enablepaper" /> Enable Signing on Paper</td>
                </tr>   
                <tr>
                    <td colspan="2"><input class="options" type="checkbox" name="sendoption" value="reqattachment" /> Request a Signer to Add an Attachment</td>
                </tr>   
                <tr>
                    <td colspan="2"><input class="options" type="checkbox" name="sendoption" value="enablemarkup" /> Enable Signers to Mark Up the Documents</td>
                </tr>   
            </table>
            <p />
            <table class="submit">
                <tr>
                    <td><input type="submit" value="Send Now" /></td>
                    <td><input type="button" value="Edit Before Sending" /></td>
                </tr>
            </table>
        </form>
    </body>
</html>

