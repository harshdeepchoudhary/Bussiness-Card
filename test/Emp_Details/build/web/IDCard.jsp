

<%@page import="db.DBCon"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head><title>
        </title>
    </head>
    <body>
    <center>
        <div style="width:980px;background-color:yellow;">
            <form action="" method="post" enctype="multipart/form-data">
                <%
                    String phone = null;
                    String whatsapp = null;
                    String map = null;
                    String email = null;
                    String address = null;
                    String website = null;
                    String facebook = null;
                    String twitter=null;
                    String instagram = null;
                    String youtube = null;
                    String pinterest = null;

                    String linked = null;
                    String telegram = null;
                    String photo = null;
                    DBCon db = null;
                    try {
                        db = new DBCon();
                        db.stmt = db.con.createStatement();

                        db.rst = db.stmt.executeQuery("SELECT * FROM emp");
                        while (db.rst.next()) {

                            phone = db.rst.getString(1);
                            whatsapp = db.rst.getString(2);
                            map = db.rst.getString(3);
                            email = db.rst.getString(4);
                            address = db.rst.getString(5);
                            website = db.rst.getString(6);
                            facebook = db.rst.getString(7);
                             twitter = db.rst.getString(9);
                            instagram = db.rst.getString(9);
                            youtube = db.rst.getString(10);
                            pinterest = db.rst.getString(11);
                            linked= db.rst.getString(12);
                            telegram = db.rst.getString(13);
                                

                             photo = db.rst.getString(14);

                %>
                <table style="width:700px; height: 500px;border: 1px solid yellow; " border="0">
                    <tr>
                        <td style="width:100px;">&nbsp;</td>
                        <td style="text-align:center;" colspan="3">
                            <span  style="font-size:X-Large;font-weight:bold;">Employee Details</span>
                        </td>
                        <td style="width:100px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="width:100px;">&nbsp;</td>
                        <td style="width:200px;text-align:left;">&nbsp;</td>
                        <td style="width:50px;text-align:center;">&nbsp;</td>
                        <td style="width:250px;text-align:left;">&nbsp;</td>
                        <td style="width:100px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="width:100px;">&nbsp;</td>
                        <td style="width:200px;text-align:left;">
                            Candidate Number
                        </td>
                        <td style="width:50px;text-align:center;">:</td>
                        <td style="width:250px;text-align:left;">
                            <td><%=phone%></td>

                        </td>
                        <td style="width:100px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="width:100px;">&nbsp;</td>
                        <td style="width:200px;text-align:left;">
                            Candidate Whatsapp Number
                        </td>
                        <td style="width:50px;text-align:center;">:</td>
                        <td style="width:250px;text-align:left;">
                          <td><%=whatsapp%></td>
                        </td>
                        <td style="width:100px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="width:100px;">&nbsp;</td>
                        <td style="width:200px;text-align:left;">
                            Your Location Google Map Link
                        </td>
                        <td style="width:50px;text-align:center;">:</td>
                        <td style="width:250px;text-align:left;">
                             <td><%=map%></td>
                        </td>
                        <td style="width:100px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="width:100px;">&nbsp;</td>
                        <td style="width:200px;text-align:left;">
                            Email
                        </td>
                        <td style="width:50px;text-align:center;">:</td>
                        <td style="width:250px;text-align:left;">
                           <td><%=email%></td>
                        </td>
                        <td style="width:100px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="width:100px;">&nbsp;</td>
                        <td style="width:200px;text-align:left;">
                            Address                </td>
                        <td style="width:50px;text-align:center;">:</td>
                        <td style="width:250px;text-align:left;">
                           <td><%=address%></td>
                        </td>
                        <td style="width:100px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="width:100px;">&nbsp;</td>
                        <td style="width:200px;text-align:left;">
                            Your Website Link
                        </td>
                        <td style="width:50px;text-align:center;">:</td>
                        <td style="width:250px;text-align:left;">
                            <input name="website" type="text" value="<%=website%>" placeholder=" Your Website Link">
                        </td>
                        <td style="width:100px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="width:100px;">&nbsp;</td>
                        <td style="width:200px;text-align:left;">
                            Your Facebook Link
                        </td>
                        <td style="width:50px;text-align:center;">:</td>
                        <td style="width:250px;text-align:left;">
                            <input name="facebook" type="text"  value="<%=facebook%>" placeholder=" Your Facebook Link">
                        </td>
                        <td style="width:100px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="width:100px;">&nbsp;</td>
                        <td style="width:200px;text-align:left;">
                            Your Twitter Link
                        </td>
                        <td style="width:50px;text-align:center;">:</td>
                        <td style="width:250px;text-align:left;">
                            <input name="twitter" type="text"  value="<%=twitter%>" placeholder=" Your Twitter Link">
                        </td>
                        <td style="width:100px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="width:100px;">&nbsp;</td>
                        <td style="width:200px;text-align:left;">
                            Your Instagram Link
                        </td>
                        <td style="width:50px;text-align:center;">:</td>
                        <td style="width:250px;text-align:left;">
                            <input name="instagram" type="text"  value="<%=instagram%>" placeholder=" Your Instagram Link">
                        </td>
                        <td style="width:100px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="width:100px;">&nbsp;</td>
                        <td style="width:200px;text-align:left;">
                            Your Youtube Link
                        </td>
                        <td style="width:50px;text-align:center;">:</td>
                        <td style="width:250px;text-align:left;">
                            <input name="youtube" type="text"  value="<%=youtube%>" placeholder=" Your Youtube Link">
                        </td>
                        <td style="width:100px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="width:100px;">&nbsp;</td>
                        <td style="width:200px;text-align:left;">
                            Your Pinterest Link
                        </td>
                        <td style="width:50px;text-align:center;">:</td>
                        <td style="width:250px;text-align:left;">
                            <input name="pinterest" type="text"  value="<%=pinterest%>" placeholder="  Your Pinterest Link">
                        </td>
                        <td style="width:100px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="width:100px;">&nbsp;</td>
                        <td style="width:200px;text-align:left;">
                            Your LinkedIN Link
                        </td>
                        <td style="width:50px;text-align:center;">:</td>
                        <td style="width:250px;text-align:left;">
                            <input name="linked" type="text"  value="<%=linked%>" placeholder="  Your LinkedIN Link">
                        </td>
                        <td style="width:100px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="width:100px;">&nbsp;</td>
                        <td style="width:200px;text-align:left;">
                            Your Telegram Link
                        </td>
                        <td style="width:50px;text-align:center;">:</td>
                        <td style="width:250px;text-align:left;">
                            <input name="telegram" type="text"  value="<%=telegram%>" placeholder="  Your Telegram Link">
                        </td>
                        <td style="width:100px;">&nbsp;</td>
                    </tr>

                    <tr>
                        <td style="width:100px;">&nbsp;</td>
                        <td style="width:200px;text-align:left;">
                            Upload candidate Photo
                        </td>
                        <td style="width:50px;text-align:center;">:</td>
                        <td style="width:250px;text-align:left;">
                            <td ><%out.println("<img src="+photo+" style='width:100px;height:100px;'>");%></td>
<!--                            <input type="file" name="photo"  value="<%=photo%>" multiple  />-->
                        </td>
                        <td style="width:100px;">&nbsp;</td>
                    </tr>
                    <td>
                        <input type="submit"  value="SUBMIT FORM" style="color:White;background-color:#666666;
                               border-color:#666666;border-style:None;" />
                    </td>
                    <td style="width:100px;">&nbsp;</td>
                    </tr>      
                           <% }
                            }
catch(Exception e)
{
    out.println(e);
}
                            %>
                </table>
            </form>
        </div>
    </center>
</body>
</html>


