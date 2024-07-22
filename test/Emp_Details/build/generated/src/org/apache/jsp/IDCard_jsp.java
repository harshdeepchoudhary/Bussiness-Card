package org.apache.jsp;

import javax.servlet.*;
import javax.servlet.http.*;
import javax.servlet.jsp.*;
import db.DBCon;

public final class IDCard_jsp extends org.apache.jasper.runtime.HttpJspBase
    implements org.apache.jasper.runtime.JspSourceDependent {

  private static final JspFactory _jspxFactory = JspFactory.getDefaultFactory();

  private static java.util.List<String> _jspx_dependants;

  private org.glassfish.jsp.api.ResourceInjector _jspx_resourceInjector;

  public java.util.List<String> getDependants() {
    return _jspx_dependants;
  }

  public void _jspService(HttpServletRequest request, HttpServletResponse response)
        throws java.io.IOException, ServletException {

    PageContext pageContext = null;
    HttpSession session = null;
    ServletContext application = null;
    ServletConfig config = null;
    JspWriter out = null;
    Object page = this;
    JspWriter _jspx_out = null;
    PageContext _jspx_page_context = null;

    try {
      response.setContentType("text/html;charset=UTF-8");
      pageContext = _jspxFactory.getPageContext(this, request, response,
      			null, true, 8192, true);
      _jspx_page_context = pageContext;
      application = pageContext.getServletContext();
      config = pageContext.getServletConfig();
      session = pageContext.getSession();
      out = pageContext.getOut();
      _jspx_out = out;
      _jspx_resourceInjector = (org.glassfish.jsp.api.ResourceInjector) application.getAttribute("com.sun.appserv.jsp.resource.injector");

      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("<!DOCTYPE html>\n");
      out.write("<html>\n");
      out.write("    <head><title>\n");
      out.write("        </title>\n");
      out.write("    </head>\n");
      out.write("    <body>\n");
      out.write("    <center>\n");
      out.write("        <div style=\"width:980px;background-color:green;\">\n");
      out.write("            <form action=\"\" method=\"post\" enctype=\"multipart/form-data\">\n");
      out.write("                ");

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

                
      out.write("\n");
      out.write("                <table style=\"width:700px; height: 500px;border: 1px solid #999999; \" border=\"0\">\n");
      out.write("                    <tr>\n");
      out.write("                        <td style=\"width:100px;\">&nbsp;</td>\n");
      out.write("                        <td style=\"text-align:center;\" colspan=\"3\">\n");
      out.write("                            <span  style=\"font-size:X-Large;font-weight:bold;\">Employee Details</span>\n");
      out.write("                        </td>\n");
      out.write("                        <td style=\"width:100px;\">&nbsp;</td>\n");
      out.write("                    </tr>\n");
      out.write("                    <tr>\n");
      out.write("                        <td style=\"width:100px;\">&nbsp;</td>\n");
      out.write("                        <td style=\"width:200px;text-align:left;\">&nbsp;</td>\n");
      out.write("                        <td style=\"width:50px;text-align:center;\">&nbsp;</td>\n");
      out.write("                        <td style=\"width:250px;text-align:left;\">&nbsp;</td>\n");
      out.write("                        <td style=\"width:100px;\">&nbsp;</td>\n");
      out.write("                    </tr>\n");
      out.write("                    <tr>\n");
      out.write("                        <td style=\"width:100px;\">&nbsp;</td>\n");
      out.write("                        <td style=\"width:200px;text-align:left;\">\n");
      out.write("                            Candidate Number\n");
      out.write("                        </td>\n");
      out.write("                        <td style=\"width:50px;text-align:center;\">:</td>\n");
      out.write("                        <td style=\"width:250px;text-align:left;\">\n");
      out.write("                            <td>");
      out.print(phone);
      out.write("</td>\n");
      out.write("\n");
      out.write("                        </td>\n");
      out.write("                        <td style=\"width:100px;\">&nbsp;</td>\n");
      out.write("                    </tr>\n");
      out.write("                    <tr>\n");
      out.write("                        <td style=\"width:100px;\">&nbsp;</td>\n");
      out.write("                        <td style=\"width:200px;text-align:left;\">\n");
      out.write("                            Candidate Whatsapp Number\n");
      out.write("                        </td>\n");
      out.write("                        <td style=\"width:50px;text-align:center;\">:</td>\n");
      out.write("                        <td style=\"width:250px;text-align:left;\">\n");
      out.write("                          <td>");
      out.print(whatsapp);
      out.write("</td>\n");
      out.write("                        </td>\n");
      out.write("                        <td style=\"width:100px;\">&nbsp;</td>\n");
      out.write("                    </tr>\n");
      out.write("                    <tr>\n");
      out.write("                        <td style=\"width:100px;\">&nbsp;</td>\n");
      out.write("                        <td style=\"width:200px;text-align:left;\">\n");
      out.write("                            Your Location Google Map Link\n");
      out.write("                        </td>\n");
      out.write("                        <td style=\"width:50px;text-align:center;\">:</td>\n");
      out.write("                        <td style=\"width:250px;text-align:left;\">\n");
      out.write("                             <td>");
      out.print(map);
      out.write("</td>\n");
      out.write("                        </td>\n");
      out.write("                        <td style=\"width:100px;\">&nbsp;</td>\n");
      out.write("                    </tr>\n");
      out.write("                    <tr>\n");
      out.write("                        <td style=\"width:100px;\">&nbsp;</td>\n");
      out.write("                        <td style=\"width:200px;text-align:left;\">\n");
      out.write("                            Email\n");
      out.write("                        </td>\n");
      out.write("                        <td style=\"width:50px;text-align:center;\">:</td>\n");
      out.write("                        <td style=\"width:250px;text-align:left;\">\n");
      out.write("                           <td>");
      out.print(email);
      out.write("</td>\n");
      out.write("                        </td>\n");
      out.write("                        <td style=\"width:100px;\">&nbsp;</td>\n");
      out.write("                    </tr>\n");
      out.write("                    <tr>\n");
      out.write("                        <td style=\"width:100px;\">&nbsp;</td>\n");
      out.write("                        <td style=\"width:200px;text-align:left;\">\n");
      out.write("                            Address                </td>\n");
      out.write("                        <td style=\"width:50px;text-align:center;\">:</td>\n");
      out.write("                        <td style=\"width:250px;text-align:left;\">\n");
      out.write("                           <td>");
      out.print(address);
      out.write("</td>\n");
      out.write("                        </td>\n");
      out.write("                        <td style=\"width:100px;\">&nbsp;</td>\n");
      out.write("                    </tr>\n");
      out.write("                    <tr>\n");
      out.write("                        <td style=\"width:100px;\">&nbsp;</td>\n");
      out.write("                        <td style=\"width:200px;text-align:left;\">\n");
      out.write("                            Your Website Link\n");
      out.write("                        </td>\n");
      out.write("                        <td style=\"width:50px;text-align:center;\">:</td>\n");
      out.write("                        <td style=\"width:250px;text-align:left;\">\n");
      out.write("                            <input name=\"website\" type=\"text\" value=\"");
      out.print(website);
      out.write("\" placeholder=\" Your Website Link\">\n");
      out.write("                        </td>\n");
      out.write("                        <td style=\"width:100px;\">&nbsp;</td>\n");
      out.write("                    </tr>\n");
      out.write("                    <tr>\n");
      out.write("                        <td style=\"width:100px;\">&nbsp;</td>\n");
      out.write("                        <td style=\"width:200px;text-align:left;\">\n");
      out.write("                            Your Facebook Link\n");
      out.write("                        </td>\n");
      out.write("                        <td style=\"width:50px;text-align:center;\">:</td>\n");
      out.write("                        <td style=\"width:250px;text-align:left;\">\n");
      out.write("                            <input name=\"facebook\" type=\"text\"  value=\"");
      out.print(facebook);
      out.write("\" placeholder=\" Your Facebook Link\">\n");
      out.write("                        </td>\n");
      out.write("                        <td style=\"width:100px;\">&nbsp;</td>\n");
      out.write("                    </tr>\n");
      out.write("                    <tr>\n");
      out.write("                        <td style=\"width:100px;\">&nbsp;</td>\n");
      out.write("                        <td style=\"width:200px;text-align:left;\">\n");
      out.write("                            Your Twitter Link\n");
      out.write("                        </td>\n");
      out.write("                        <td style=\"width:50px;text-align:center;\">:</td>\n");
      out.write("                        <td style=\"width:250px;text-align:left;\">\n");
      out.write("                            <input name=\"twitter\" type=\"text\"  value=\"");
      out.print(twitter);
      out.write("\" placeholder=\" Your Twitter Link\">\n");
      out.write("                        </td>\n");
      out.write("                        <td style=\"width:100px;\">&nbsp;</td>\n");
      out.write("                    </tr>\n");
      out.write("                    <tr>\n");
      out.write("                        <td style=\"width:100px;\">&nbsp;</td>\n");
      out.write("                        <td style=\"width:200px;text-align:left;\">\n");
      out.write("                            Your Instagram Link\n");
      out.write("                        </td>\n");
      out.write("                        <td style=\"width:50px;text-align:center;\">:</td>\n");
      out.write("                        <td style=\"width:250px;text-align:left;\">\n");
      out.write("                            <input name=\"instagram\" type=\"text\"  value=\"");
      out.print(instagram);
      out.write("\" placeholder=\" Your Instagram Link\">\n");
      out.write("                        </td>\n");
      out.write("                        <td style=\"width:100px;\">&nbsp;</td>\n");
      out.write("                    </tr>\n");
      out.write("                    <tr>\n");
      out.write("                        <td style=\"width:100px;\">&nbsp;</td>\n");
      out.write("                        <td style=\"width:200px;text-align:left;\">\n");
      out.write("                            Your Youtube Link\n");
      out.write("                        </td>\n");
      out.write("                        <td style=\"width:50px;text-align:center;\">:</td>\n");
      out.write("                        <td style=\"width:250px;text-align:left;\">\n");
      out.write("                            <input name=\"youtube\" type=\"text\"  value=\"");
      out.print(youtube);
      out.write("\" placeholder=\" Your Youtube Link\">\n");
      out.write("                        </td>\n");
      out.write("                        <td style=\"width:100px;\">&nbsp;</td>\n");
      out.write("                    </tr>\n");
      out.write("                    <tr>\n");
      out.write("                        <td style=\"width:100px;\">&nbsp;</td>\n");
      out.write("                        <td style=\"width:200px;text-align:left;\">\n");
      out.write("                            Your Pinterest Link\n");
      out.write("                        </td>\n");
      out.write("                        <td style=\"width:50px;text-align:center;\">:</td>\n");
      out.write("                        <td style=\"width:250px;text-align:left;\">\n");
      out.write("                            <input name=\"pinterest\" type=\"text\"  value=\"");
      out.print(pinterest);
      out.write("\" placeholder=\"  Your Pinterest Link\">\n");
      out.write("                        </td>\n");
      out.write("                        <td style=\"width:100px;\">&nbsp;</td>\n");
      out.write("                    </tr>\n");
      out.write("                    <tr>\n");
      out.write("                        <td style=\"width:100px;\">&nbsp;</td>\n");
      out.write("                        <td style=\"width:200px;text-align:left;\">\n");
      out.write("                            Your LinkedIN Link\n");
      out.write("                        </td>\n");
      out.write("                        <td style=\"width:50px;text-align:center;\">:</td>\n");
      out.write("                        <td style=\"width:250px;text-align:left;\">\n");
      out.write("                            <input name=\"linked\" type=\"text\"  value=\"");
      out.print(linked);
      out.write("\" placeholder=\"  Your LinkedIN Link\">\n");
      out.write("                        </td>\n");
      out.write("                        <td style=\"width:100px;\">&nbsp;</td>\n");
      out.write("                    </tr>\n");
      out.write("                    <tr>\n");
      out.write("                        <td style=\"width:100px;\">&nbsp;</td>\n");
      out.write("                        <td style=\"width:200px;text-align:left;\">\n");
      out.write("                            Your Telegram Link\n");
      out.write("                        </td>\n");
      out.write("                        <td style=\"width:50px;text-align:center;\">:</td>\n");
      out.write("                        <td style=\"width:250px;text-align:left;\">\n");
      out.write("                            <input name=\"telegram\" type=\"text\"  value=\"");
      out.print(telegram);
      out.write("\" placeholder=\"  Your Telegram Link\">\n");
      out.write("                        </td>\n");
      out.write("                        <td style=\"width:100px;\">&nbsp;</td>\n");
      out.write("                    </tr>\n");
      out.write("\n");
      out.write("                    <tr>\n");
      out.write("                        <td style=\"width:100px;\">&nbsp;</td>\n");
      out.write("                        <td style=\"width:200px;text-align:left;\">\n");
      out.write("                            Upload candidate Photo\n");
      out.write("                        </td>\n");
      out.write("                        <td style=\"width:50px;text-align:center;\">:</td>\n");
      out.write("                        <td style=\"width:250px;text-align:left;\">\n");
      out.write("                            <td >");
out.println("<img src="+photo+" style='width:100px;height:100px;'>");
      out.write("</td>\n");
      out.write("<!--                            <input type=\"file\" name=\"photo\"  value=\"");
      out.print(photo);
      out.write("\" multiple  />-->\n");
      out.write("                        </td>\n");
      out.write("                        <td style=\"width:100px;\">&nbsp;</td>\n");
      out.write("                    </tr>\n");
      out.write("                    <td>\n");
      out.write("                        <input type=\"submit\"  value=\"SUBMIT FORM\" style=\"color:White;background-color:#666666;\n");
      out.write("                               border-color:#666666;border-style:None;\" />\n");
      out.write("                    </td>\n");
      out.write("                    <td style=\"width:100px;\">&nbsp;</td>\n");
      out.write("                    </tr>      \n");
      out.write("                           ");
 }
                            }
catch(Exception e)
{
    out.println(e);
}
                            
      out.write("\n");
      out.write("                </table>\n");
      out.write("            </form>\n");
      out.write("        </div>\n");
      out.write("    </center>\n");
      out.write("</body>\n");
      out.write("</html>\n");
      out.write("\n");
      out.write("\n");
    } catch (Throwable t) {
      if (!(t instanceof SkipPageException)){
        out = _jspx_out;
        if (out != null && out.getBufferSize() != 0)
          out.clearBuffer();
        if (_jspx_page_context != null) _jspx_page_context.handlePageException(t);
        else throw new ServletException(t);
      }
    } finally {
      _jspxFactory.releasePageContext(_jspx_page_context);
    }
  }
}
