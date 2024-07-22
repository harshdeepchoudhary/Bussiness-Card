/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package apps;

import com.oreilly.servlet.multipart.FilePart;
import com.oreilly.servlet.multipart.MultipartParser;
import com.oreilly.servlet.multipart.ParamPart;
import com.oreilly.servlet.multipart.Part;
import db.DBCon;
import java.io.File;
import java.io.IOException;
import java.io.PrintWriter;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 *
 * @author hhp
 */
public class Confg extends HttpServlet {

    /**
     * Processes requests for both HTTP <code>GET</code> and <code>POST</code>
     * methods.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
        PrintWriter out = response.getWriter();
        try {
            String fileName = null;
            String fileSavePath = getServletContext().getRealPath("/");//returns the Context path of Application
            File f = null;
            int i = 0;
            long s = 0;
            try {
                String[] value = new String[14];
                MultipartParser mps = new MultipartParser(request, 5999 * 1024 * 1024);
                Part part;
                while ((part = mps.readNextPart()) != null) {
                    String name = part.getName();//variable Name
                    if (part.isParam()) {
                        ParamPart paramPart = (ParamPart) part;
                        value[i] = paramPart.getStringValue();
                        i++;
                    } else if (part.isFile()) {
                        FilePart filePart = (FilePart) part;
                        fileName = filePart.getFileName();
                        if (fileName != null) {
                            long fileSize = filePart.writeTo(new java.io.File(fileSavePath));//upload file into server
                        }
                    }
                }
                DBCon db = new DBCon();

                db.pstmt = db.con.prepareStatement("insert into emp(phone,whatsapp,map,email,address,website,facebook,twitter,instagram,youtube,pinterest,linked,telegram,photo) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
                db.pstmt.setString(1, value[0]);
                db.pstmt.setString(2, value[1]);
                db.pstmt.setString(3, value[2]);
                db.pstmt.setString(4, value[3]);
                db.pstmt.setString(5, value[4]);
                db.pstmt.setString(6, value[5]);
                db.pstmt.setString(7, value[6]);
                db.pstmt.setString(8, value[7]);
                db.pstmt.setString(9, value[8]);
                db.pstmt.setString(10, value[9]);
                db.pstmt.setString(11, value[10]);
                db.pstmt.setString(12, value[11]);
                db.pstmt.setString(13, value[12]);

                db.pstmt.setString(14, ("./" + fileName));
                int i1 = db.pstmt.executeUpdate();
                if (i1 > 0) {
                 response.sendRedirect("IDCard.jsp");

                } else {
                    out.println("not");

                }
            } catch (Exception e) {
                e.printStackTrace();
                out.println(e);
            }
        } catch (Exception e) {
            e.printStackTrace();
        }

    }

    // <editor-fold defaultstate="collapsed" desc="HttpServlet methods. Click on the + sign on the left to edit the code.">
    /**
     * Handles the HTTP <code>GET</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    /**
     * Handles the HTTP <code>POST</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    /**
     * Returns a short description of the servlet.
     *
     * @return a String containing servlet description
     */
    @Override
    public String getServletInfo() {
        return "Short description";
    }// </editor-fold>

}
