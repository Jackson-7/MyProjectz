/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.thecaffeinefix;

import com.mysql.jdbc.Statement;
import java.sql.Connection;
import java.sql.DriverManager;
import javax.swing.JOptionPane;

/**
 *
 * @author Mackson
 */
public class Sign_upUI extends javax.swing.JFrame {

    /**
     * Creates new form Sign_upUI
     */
    public Sign_upUI() {
        initComponents();
    }
    
    public boolean validation(){
    
        String emailaddress,firstname,lastname,username,password,cnfpass,contactno,province,postalcd,housing;
        emailaddress = emailadd.getText();
        firstname = fname.getText();
        lastname = lname.getText();
        username = usrname.getText();
        password = visible_pass_su.getText();
        cnfpass = pass_su.getText();
        contactno = contact.getText();
        province = provinceadd.getText();
        postalcd = postalcode.getText();
        housing = housing_add.getText();
        
        if(emailaddress.equals("")){
            JOptionPane.showMessageDialog(this,"PLEASE ENTER THE EMAIL-ADDRESS");
            return false;
        }
        if(firstname.equals("")){
            JOptionPane.showMessageDialog(this,"PLEASE ENTER THE FIRSTNAME");
            return false;
        }
        if(lastname.equals("")){
            JOptionPane.showMessageDialog(this,"PLEASE ENTER THE LASTNAME");
            return false;
        }
        if(username.equals("")){
            JOptionPane.showMessageDialog(this,"PLEASE ENTER THE USERNAME");
            return false;
        }
        if(password.equals("")){
            JOptionPane.showMessageDialog(this,"PLEASE ENTER THE PASSWORD");
            return false;
        }
        if(cnfpass.equals("")){
            JOptionPane.showMessageDialog(this,"PLEASE CONFIRM THE PASSWORD");
            return false;
        }
        if(contactno.equals("")){
            JOptionPane.showMessageDialog(this,"PLEASE ENTER THE CONTACT NUMBER");
            return false;
        }
        if(province.equals("")){
            JOptionPane.showMessageDialog(this,"PLEASE ENTER YOUR PROVINCE");
            return false;
        }
        if(postalcd.equals("")){
            JOptionPane.showMessageDialog(this,"PLEASE ENTER YOUR POSTAL CODE");
            return false;
        }
        if(housing.equals("")){
            JOptionPane.showMessageDialog(this,"PLEASE ENTER YOUR HOUSING ADDRESS");
            return false;
        }
        if(!password.equals(cnfpass)){
            JOptionPane.showMessageDialog(this,"PASSWORD MIS-MATCH");
            return false;
        }
        else {
        
        new Sign_inUI().setVisible(true);
        dispose();
        }
        return true;
        
}
    public void insertintodb(){
        
        String emailaddress,firstname,lastname,username,password,cnfpass,contactno,province,postalcd,housing;
        emailaddress = emailadd.getText();
        firstname = fname.getText();
        lastname = lname.getText();
        username = usrname.getText();
        password = visible_pass_su.getText();
        cnfpass = pass_su.getText();
        contactno = contact.getText();
        province = provinceadd.getText();
        postalcd = postalcode.getText();
        housing = housing_add.getText();
        
        try {
            Class.forName("com.mysql.jdbc.Driver");
            Connection con = DriverManager.getConnection("jdbc:mysql://localhost:3306/signup","root","root");
            java.sql.Statement st=con.createStatement();
            String sql="insert into signupdata values('"+emailaddress+"','"+firstname+"','"+lastname+"','"+password+"','"+contactno+"','"+username+"','"+province+"','"+postalcd+"','"+housing+"')";
            st.execute(sql);     
            JOptionPane.showMessageDialog(this,"ACCOUNT CREATED SUCCESSFULLY");
        } 
        catch (Exception e) {
            
            JOptionPane.showMessageDialog(this,e.getMessage());
            
        }
               
        
    }

    /**
     * This method is called from within the constructor to initialize the form.
     * WARNING: Do NOT modify this code. The content of this method is always
     * regenerated by the Form Editor.
     */
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jPanel1 = new javax.swing.JPanel();
        jPanel3 = new javax.swing.JPanel();
        jLabel1 = new javax.swing.JLabel();
        jLabel2 = new javax.swing.JLabel();
        jPanel4 = new javax.swing.JPanel();
        fname = new javax.swing.JTextField();
        lname = new javax.swing.JTextField();
        jLabel3 = new javax.swing.JLabel();
        provinceadd = new javax.swing.JTextField();
        postalcode = new javax.swing.JTextField();
        housing_add = new javax.swing.JTextField();
        contact = new javax.swing.JTextField();
        visible_pass_su = new javax.swing.JTextField();
        pass_su = new javax.swing.JPasswordField();
        emailadd = new javax.swing.JTextField();
        jSeparator1 = new javax.swing.JSeparator();
        jSeparator2 = new javax.swing.JSeparator();
        jSeparator3 = new javax.swing.JSeparator();
        jSeparator4 = new javax.swing.JSeparator();
        jSeparator5 = new javax.swing.JSeparator();
        jSeparator6 = new javax.swing.JSeparator();
        jSeparator7 = new javax.swing.JSeparator();
        jSeparator8 = new javax.swing.JSeparator();
        jSeparator9 = new javax.swing.JSeparator();
        jPanel2 = new javax.swing.JPanel();
        lbl_register = new javax.swing.JLabel();
        jLabel5 = new javax.swing.JLabel();
        jSeparator10 = new javax.swing.JSeparator();
        usrname = new javax.swing.JTextField();

        setDefaultCloseOperation(javax.swing.WindowConstants.DISPOSE_ON_CLOSE);
        setUndecorated(true);

        jPanel3.setBackground(new java.awt.Color(233, 67, 71));

        jLabel1.setIcon(new javax.swing.ImageIcon(getClass().getResource("/com/thecaffeinefix/icons8-food-96 (1).png"))); // NOI18N

        jLabel2.setFont(new java.awt.Font("SansSerif", 1, 30)); // NOI18N
        jLabel2.setForeground(new java.awt.Color(248, 248, 248));
        jLabel2.setText("The Caffeine Fix");

        javax.swing.GroupLayout jPanel3Layout = new javax.swing.GroupLayout(jPanel3);
        jPanel3.setLayout(jPanel3Layout);
        jPanel3Layout.setHorizontalGroup(
            jPanel3Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel3Layout.createSequentialGroup()
                .addGroup(jPanel3Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(jPanel3Layout.createSequentialGroup()
                        .addGap(77, 77, 77)
                        .addComponent(jLabel1))
                    .addGroup(jPanel3Layout.createSequentialGroup()
                        .addContainerGap()
                        .addComponent(jLabel2)))
                .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
        );
        jPanel3Layout.setVerticalGroup(
            jPanel3Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel3Layout.createSequentialGroup()
                .addGap(121, 121, 121)
                .addComponent(jLabel1)
                .addGap(36, 36, 36)
                .addComponent(jLabel2, javax.swing.GroupLayout.PREFERRED_SIZE, 44, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
        );

        jPanel4.setBackground(new java.awt.Color(16, 34, 63));
        jPanel4.setForeground(new java.awt.Color(248, 248, 248));
        jPanel4.setLayout(new org.netbeans.lib.awtextra.AbsoluteLayout());

        fname.setBackground(new java.awt.Color(16, 34, 63));
        fname.setForeground(new java.awt.Color(192, 192, 192));
        fname.setText("First Name");
        fname.setBorder(null);
        fname.addFocusListener(new java.awt.event.FocusAdapter() {
            public void focusGained(java.awt.event.FocusEvent evt) {
                fnameFocusGained(evt);
            }
            public void focusLost(java.awt.event.FocusEvent evt) {
                fnameFocusLost(evt);
            }
        });
        jPanel4.add(fname, new org.netbeans.lib.awtextra.AbsoluteConstraints(90, 90, 190, 30));

        lname.setBackground(new java.awt.Color(16, 34, 63));
        lname.setForeground(new java.awt.Color(192, 192, 192));
        lname.setText("Last Name");
        lname.setBorder(null);
        lname.addFocusListener(new java.awt.event.FocusAdapter() {
            public void focusGained(java.awt.event.FocusEvent evt) {
                lnameFocusGained(evt);
            }
            public void focusLost(java.awt.event.FocusEvent evt) {
                lnameFocusLost(evt);
            }
        });
        lname.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                lnameActionPerformed(evt);
            }
        });
        jPanel4.add(lname, new org.netbeans.lib.awtextra.AbsoluteConstraints(310, 90, 190, 30));

        jLabel3.setFont(new java.awt.Font("SansSerif", 0, 18)); // NOI18N
        jLabel3.setForeground(new java.awt.Color(233, 67, 71));
        jLabel3.setText("Address");
        jPanel4.add(jLabel3, new org.netbeans.lib.awtextra.AbsoluteConstraints(90, 240, 170, 30));

        provinceadd.setBackground(new java.awt.Color(16, 34, 63));
        provinceadd.setForeground(new java.awt.Color(192, 192, 192));
        provinceadd.setText("Province");
        provinceadd.setBorder(null);
        provinceadd.addFocusListener(new java.awt.event.FocusAdapter() {
            public void focusGained(java.awt.event.FocusEvent evt) {
                provinceaddFocusGained(evt);
            }
            public void focusLost(java.awt.event.FocusEvent evt) {
                provinceaddFocusLost(evt);
            }
        });
        jPanel4.add(provinceadd, new org.netbeans.lib.awtextra.AbsoluteConstraints(90, 270, 190, 30));

        postalcode.setBackground(new java.awt.Color(16, 34, 63));
        postalcode.setForeground(new java.awt.Color(192, 192, 192));
        postalcode.setText("Postal Code");
        postalcode.setBorder(null);
        postalcode.addFocusListener(new java.awt.event.FocusAdapter() {
            public void focusGained(java.awt.event.FocusEvent evt) {
                postalcodeFocusGained(evt);
            }
            public void focusLost(java.awt.event.FocusEvent evt) {
                postalcodeFocusLost(evt);
            }
        });
        postalcode.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                postalcodeActionPerformed(evt);
            }
        });
        jPanel4.add(postalcode, new org.netbeans.lib.awtextra.AbsoluteConstraints(310, 270, 190, 30));

        housing_add.setBackground(new java.awt.Color(16, 34, 63));
        housing_add.setForeground(new java.awt.Color(192, 192, 192));
        housing_add.setText("Room no, Society Name, Floor");
        housing_add.setBorder(null);
        housing_add.addFocusListener(new java.awt.event.FocusAdapter() {
            public void focusGained(java.awt.event.FocusEvent evt) {
                housing_addFocusGained(evt);
            }
            public void focusLost(java.awt.event.FocusEvent evt) {
                housing_addFocusLost(evt);
            }
        });
        jPanel4.add(housing_add, new org.netbeans.lib.awtextra.AbsoluteConstraints(90, 320, 410, 30));

        contact.setBackground(new java.awt.Color(16, 34, 63));
        contact.setForeground(new java.awt.Color(192, 192, 192));
        contact.setText("Contact No.");
        contact.setBorder(null);
        contact.addFocusListener(new java.awt.event.FocusAdapter() {
            public void focusGained(java.awt.event.FocusEvent evt) {
                contactFocusGained(evt);
            }
            public void focusLost(java.awt.event.FocusEvent evt) {
                contactFocusLost(evt);
            }
        });
        jPanel4.add(contact, new org.netbeans.lib.awtextra.AbsoluteConstraints(90, 190, 190, 30));

        visible_pass_su.setBackground(new java.awt.Color(16, 34, 63));
        visible_pass_su.setForeground(new java.awt.Color(192, 192, 192));
        visible_pass_su.setText("Password");
        visible_pass_su.setBorder(null);
        visible_pass_su.addFocusListener(new java.awt.event.FocusAdapter() {
            public void focusGained(java.awt.event.FocusEvent evt) {
                visible_pass_suFocusGained(evt);
            }
            public void focusLost(java.awt.event.FocusEvent evt) {
                visible_pass_suFocusLost(evt);
            }
        });
        jPanel4.add(visible_pass_su, new org.netbeans.lib.awtextra.AbsoluteConstraints(90, 140, 190, 30));

        pass_su.setBackground(new java.awt.Color(16, 34, 63));
        pass_su.setForeground(new java.awt.Color(192, 192, 192));
        pass_su.setText("Confirm");
        pass_su.setBorder(null);
        pass_su.addFocusListener(new java.awt.event.FocusAdapter() {
            public void focusGained(java.awt.event.FocusEvent evt) {
                pass_suFocusGained(evt);
            }
            public void focusLost(java.awt.event.FocusEvent evt) {
                pass_suFocusLost(evt);
            }
        });
        jPanel4.add(pass_su, new org.netbeans.lib.awtextra.AbsoluteConstraints(310, 140, 190, 30));

        emailadd.setBackground(new java.awt.Color(16, 34, 63));
        emailadd.setForeground(new java.awt.Color(192, 192, 192));
        emailadd.setText("E-Mail Address");
        emailadd.setBorder(null);
        emailadd.addFocusListener(new java.awt.event.FocusAdapter() {
            public void focusGained(java.awt.event.FocusEvent evt) {
                emailaddFocusGained(evt);
            }
            public void focusLost(java.awt.event.FocusEvent evt) {
                emailaddFocusLost(evt);
            }
        });
        jPanel4.add(emailadd, new org.netbeans.lib.awtextra.AbsoluteConstraints(90, 40, 410, 30));

        jSeparator1.setBackground(new java.awt.Color(233, 67, 71));
        jSeparator1.setForeground(new java.awt.Color(233, 67, 71));
        jPanel4.add(jSeparator1, new org.netbeans.lib.awtextra.AbsoluteConstraints(90, 70, 410, 20));

        jSeparator2.setBackground(new java.awt.Color(233, 67, 71));
        jSeparator2.setForeground(new java.awt.Color(233, 67, 71));
        jPanel4.add(jSeparator2, new org.netbeans.lib.awtextra.AbsoluteConstraints(90, 120, 190, 20));

        jSeparator3.setBackground(new java.awt.Color(233, 67, 71));
        jSeparator3.setForeground(new java.awt.Color(233, 67, 71));
        jPanel4.add(jSeparator3, new org.netbeans.lib.awtextra.AbsoluteConstraints(310, 120, 190, 20));

        jSeparator4.setBackground(new java.awt.Color(233, 67, 71));
        jSeparator4.setForeground(new java.awt.Color(233, 67, 71));
        jPanel4.add(jSeparator4, new org.netbeans.lib.awtextra.AbsoluteConstraints(90, 170, 190, 20));

        jSeparator5.setBackground(new java.awt.Color(233, 67, 71));
        jSeparator5.setForeground(new java.awt.Color(233, 67, 71));
        jPanel4.add(jSeparator5, new org.netbeans.lib.awtextra.AbsoluteConstraints(310, 170, 190, 20));

        jSeparator6.setBackground(new java.awt.Color(233, 67, 71));
        jSeparator6.setForeground(new java.awt.Color(233, 67, 71));
        jPanel4.add(jSeparator6, new org.netbeans.lib.awtextra.AbsoluteConstraints(90, 220, 190, 20));

        jSeparator7.setBackground(new java.awt.Color(233, 67, 71));
        jSeparator7.setForeground(new java.awt.Color(233, 67, 71));
        jPanel4.add(jSeparator7, new org.netbeans.lib.awtextra.AbsoluteConstraints(90, 300, 190, 20));

        jSeparator8.setBackground(new java.awt.Color(233, 67, 71));
        jSeparator8.setForeground(new java.awt.Color(233, 67, 71));
        jPanel4.add(jSeparator8, new org.netbeans.lib.awtextra.AbsoluteConstraints(310, 300, 190, 20));

        jSeparator9.setBackground(new java.awt.Color(233, 67, 71));
        jSeparator9.setForeground(new java.awt.Color(233, 67, 71));
        jPanel4.add(jSeparator9, new org.netbeans.lib.awtextra.AbsoluteConstraints(90, 350, 410, 20));

        jPanel2.setBackground(new java.awt.Color(233, 67, 71));

        lbl_register.setBackground(new java.awt.Color(233, 67, 71));
        lbl_register.setFont(new java.awt.Font("SansSerif", 0, 14)); // NOI18N
        lbl_register.setForeground(new java.awt.Color(16, 34, 63));
        lbl_register.setText("      Register");
        lbl_register.setBorder(new javax.swing.border.SoftBevelBorder(javax.swing.border.BevelBorder.RAISED));
        lbl_register.addMouseListener(new java.awt.event.MouseAdapter() {
            public void mouseClicked(java.awt.event.MouseEvent evt) {
                lbl_registerMouseClicked(evt);
            }
        });

        javax.swing.GroupLayout jPanel2Layout = new javax.swing.GroupLayout(jPanel2);
        jPanel2.setLayout(jPanel2Layout);
        jPanel2Layout.setHorizontalGroup(
            jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, jPanel2Layout.createSequentialGroup()
                .addGap(0, 0, Short.MAX_VALUE)
                .addComponent(lbl_register, javax.swing.GroupLayout.PREFERRED_SIZE, 100, javax.swing.GroupLayout.PREFERRED_SIZE))
        );
        jPanel2Layout.setVerticalGroup(
            jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, jPanel2Layout.createSequentialGroup()
                .addGap(0, 0, Short.MAX_VALUE)
                .addComponent(lbl_register, javax.swing.GroupLayout.PREFERRED_SIZE, 30, javax.swing.GroupLayout.PREFERRED_SIZE))
        );

        jPanel4.add(jPanel2, new org.netbeans.lib.awtextra.AbsoluteConstraints(250, 380, -1, 30));

        jLabel5.setFont(new java.awt.Font("Segoe UI Historic", 1, 24)); // NOI18N
        jLabel5.setForeground(new java.awt.Color(248, 248, 248));
        jLabel5.setText("X");
        jLabel5.setToolTipText("");
        jLabel5.addMouseListener(new java.awt.event.MouseAdapter() {
            public void mouseClicked(java.awt.event.MouseEvent evt) {
                jLabel5MouseClicked(evt);
            }
        });
        jPanel4.add(jLabel5, new org.netbeans.lib.awtextra.AbsoluteConstraints(560, 10, 20, 20));

        jSeparator10.setBackground(new java.awt.Color(233, 67, 71));
        jSeparator10.setForeground(new java.awt.Color(233, 67, 71));
        jPanel4.add(jSeparator10, new org.netbeans.lib.awtextra.AbsoluteConstraints(310, 220, 190, 10));

        usrname.setBackground(new java.awt.Color(16, 34, 63));
        usrname.setForeground(new java.awt.Color(192, 192, 192));
        usrname.setText("Username");
        usrname.setBorder(null);
        usrname.addFocusListener(new java.awt.event.FocusAdapter() {
            public void focusGained(java.awt.event.FocusEvent evt) {
                usrnameFocusGained(evt);
            }
            public void focusLost(java.awt.event.FocusEvent evt) {
                usrnameFocusLost(evt);
            }
        });
        jPanel4.add(usrname, new org.netbeans.lib.awtextra.AbsoluteConstraints(310, 190, 190, 30));

        javax.swing.GroupLayout jPanel1Layout = new javax.swing.GroupLayout(jPanel1);
        jPanel1.setLayout(jPanel1Layout);
        jPanel1Layout.setHorizontalGroup(
            jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel1Layout.createSequentialGroup()
                .addComponent(jPanel3, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(0, 0, Short.MAX_VALUE)
                .addComponent(jPanel4, javax.swing.GroupLayout.PREFERRED_SIZE, 586, javax.swing.GroupLayout.PREFERRED_SIZE))
        );
        jPanel1Layout.setVerticalGroup(
            jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(jPanel3, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
            .addComponent(jPanel4, javax.swing.GroupLayout.DEFAULT_SIZE, 480, Short.MAX_VALUE)
        );

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(jPanel1, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(jPanel1, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
        );

        pack();
        setLocationRelativeTo(null);
    }// </editor-fold>//GEN-END:initComponents

    private void lnameActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_lnameActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_lnameActionPerformed

    private void postalcodeActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_postalcodeActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_postalcodeActionPerformed

    private void jLabel5MouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_jLabel5MouseClicked
        // TOP RIGHT 'X' EXIT CODE
        System.exit(0);
    }//GEN-LAST:event_jLabel5MouseClicked

    private void emailaddFocusGained(java.awt.event.FocusEvent evt) {//GEN-FIRST:event_emailaddFocusGained
        // EMAIL PLACEHOLDER
        if(emailadd.getText().equals("E-Mail Address"))
        {
        emailadd.setText("");
        }
    }//GEN-LAST:event_emailaddFocusGained

    private void fnameFocusGained(java.awt.event.FocusEvent evt) {//GEN-FIRST:event_fnameFocusGained
        // FNAME PLACEHOLDER
        if(fname.getText().equals("First Name"))
        {
        fname.setText("");
        }
    }//GEN-LAST:event_fnameFocusGained

    private void lnameFocusGained(java.awt.event.FocusEvent evt) {//GEN-FIRST:event_lnameFocusGained
        // LNAME PLACEHOLDER
        if(lname.getText().equals("Last Name"))
        {
        lname.setText("");
        }
    }//GEN-LAST:event_lnameFocusGained

    private void visible_pass_suFocusGained(java.awt.event.FocusEvent evt) {//GEN-FIRST:event_visible_pass_suFocusGained
        // VISIBLE_PASS PLACEHOLDER
        if(visible_pass_su.getText().equals("Password"))
        {
        visible_pass_su.setText("");
        }
    }//GEN-LAST:event_visible_pass_suFocusGained

    private void pass_suFocusGained(java.awt.event.FocusEvent evt) {//GEN-FIRST:event_pass_suFocusGained
        // PASS PLACEHOLDER
        if(pass_su.getText().equals("Confirm"))
        {
        pass_su.setText("");
        }
    }//GEN-LAST:event_pass_suFocusGained

    private void contactFocusGained(java.awt.event.FocusEvent evt) {//GEN-FIRST:event_contactFocusGained
        // CONTACT NO. PLACEHOLDER
        if(contact.getText().equals("Contact No."))
        {
        contact.setText("");
        }
    }//GEN-LAST:event_contactFocusGained

    private void provinceaddFocusGained(java.awt.event.FocusEvent evt) {//GEN-FIRST:event_provinceaddFocusGained
        // PROVINCE PLACEHOLDER
        if(provinceadd.getText().equals("Province"))
        {
        provinceadd.setText("");
        }
    }//GEN-LAST:event_provinceaddFocusGained

    private void housing_addFocusGained(java.awt.event.FocusEvent evt) {//GEN-FIRST:event_housing_addFocusGained
        // HOUSING ADDRESS
        if(housing_add.getText().equals("Room no, Society Name, Floor"))
        {
        housing_add.setText("");
        }
    }//GEN-LAST:event_housing_addFocusGained

    private void housing_addFocusLost(java.awt.event.FocusEvent evt) {//GEN-FIRST:event_housing_addFocusLost
        // HOUSING ADD PLACEHOLDER
        if(housing_add.getText().equals(""))
        {
        housing_add.setText("Room no, Society Name, Floor");
        }
    }//GEN-LAST:event_housing_addFocusLost

    private void postalcodeFocusGained(java.awt.event.FocusEvent evt) {//GEN-FIRST:event_postalcodeFocusGained
        // POSTAL CODE ADDRESS
        if(postalcode.getText().equals("Postal Code"))
        {
        postalcode.setText("");
        }
    }//GEN-LAST:event_postalcodeFocusGained

    private void postalcodeFocusLost(java.awt.event.FocusEvent evt) {//GEN-FIRST:event_postalcodeFocusLost
        // POSTAL CODE PLACEHOLDER
        if(postalcode.getText().equals(""))
        {
        postalcode.setText("Postal Code");
        }
    }//GEN-LAST:event_postalcodeFocusLost

    private void provinceaddFocusLost(java.awt.event.FocusEvent evt) {//GEN-FIRST:event_provinceaddFocusLost
        // PROVINCE PLACEHOLDER
        if(provinceadd.getText().equals(""))
        {
        provinceadd.setText("Province");
        }
    }//GEN-LAST:event_provinceaddFocusLost

    private void contactFocusLost(java.awt.event.FocusEvent evt) {//GEN-FIRST:event_contactFocusLost
        // CONTACT PLACEHOLDER
        if(contact.getText().equals(""))
        {
        contact.setText("Contact No.");
        }
    }//GEN-LAST:event_contactFocusLost

    private void pass_suFocusLost(java.awt.event.FocusEvent evt) {//GEN-FIRST:event_pass_suFocusLost
        // CONFIRM PLACEHOLDER
        if(pass_su.getText().equals(""))
        {
        pass_su.setText("Confirm");
        }
    }//GEN-LAST:event_pass_suFocusLost

    private void visible_pass_suFocusLost(java.awt.event.FocusEvent evt) {//GEN-FIRST:event_visible_pass_suFocusLost
        // VISIBLE PASS PLACEHOLDER
        if(visible_pass_su.getText().equals(""))
        {
        visible_pass_su.setText("Password");
        }
    }//GEN-LAST:event_visible_pass_suFocusLost

    private void lnameFocusLost(java.awt.event.FocusEvent evt) {//GEN-FIRST:event_lnameFocusLost
        // LAST NAME PLACEHOLDER
        if(lname.getText().equals(""))
        {
        lname.setText("Last Name");
        }
    }//GEN-LAST:event_lnameFocusLost

    private void fnameFocusLost(java.awt.event.FocusEvent evt) {//GEN-FIRST:event_fnameFocusLost
        // FIRST NAME PLACEHOLDER
        if(fname.getText().equals(""))
        {
        fname.setText("First Name");
        }
    }//GEN-LAST:event_fnameFocusLost

    private void emailaddFocusLost(java.awt.event.FocusEvent evt) {//GEN-FIRST:event_emailaddFocusLost
        // EMAIL ADDRESS PLACEHOLDER
        if(emailadd.getText().equals(""))
        {
        emailadd.setText("E-Mail Address");
        }
    }//GEN-LAST:event_emailaddFocusLost

    private void lbl_registerMouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_lbl_registerMouseClicked
        // REGISTER
        if(validation()==true)
        {
        insertintodb();
        }
    }//GEN-LAST:event_lbl_registerMouseClicked

    private void usrnameFocusGained(java.awt.event.FocusEvent evt) {//GEN-FIRST:event_usrnameFocusGained
        // USERNAME PLACEHOLDER
        if(usrname.getText().equals("Username"))
        {
        usrname.setText("");
        }
    }//GEN-LAST:event_usrnameFocusGained

    private void usrnameFocusLost(java.awt.event.FocusEvent evt) {//GEN-FIRST:event_usrnameFocusLost
        // USERNAME PLACEHOLDER
        if(usrname.getText().equals(""))
        {
        usrname.setText("Username");
        }
    }//GEN-LAST:event_usrnameFocusLost

    /**
     * @param args the command line arguments
     */
    public static void main(String args[]) {
        /* Set the Nimbus look and feel */
        //<editor-fold defaultstate="collapsed" desc=" Look and feel setting code (optional) ">
        /* If Nimbus (introduced in Java SE 6) is not available, stay with the default look and feel.
         * For details see http://download.oracle.com/javase/tutorial/uiswing/lookandfeel/plaf.html 
         */
        try {
            for (javax.swing.UIManager.LookAndFeelInfo info : javax.swing.UIManager.getInstalledLookAndFeels()) {
                if ("Nimbus".equals(info.getName())) {
                    javax.swing.UIManager.setLookAndFeel(info.getClassName());
                    break;
                }
            }
        } catch (ClassNotFoundException ex) {
            java.util.logging.Logger.getLogger(Sign_upUI.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (InstantiationException ex) {
            java.util.logging.Logger.getLogger(Sign_upUI.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (IllegalAccessException ex) {
            java.util.logging.Logger.getLogger(Sign_upUI.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (javax.swing.UnsupportedLookAndFeelException ex) {
            java.util.logging.Logger.getLogger(Sign_upUI.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        }
        //</editor-fold>

        /* Create and display the form */
        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new Sign_upUI().setVisible(true);
            }
        });
    }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JTextField contact;
    private javax.swing.JTextField emailadd;
    private javax.swing.JTextField fname;
    private javax.swing.JTextField housing_add;
    private javax.swing.JLabel jLabel1;
    private javax.swing.JLabel jLabel2;
    private javax.swing.JLabel jLabel3;
    private javax.swing.JLabel jLabel5;
    private javax.swing.JPanel jPanel1;
    private javax.swing.JPanel jPanel2;
    private javax.swing.JPanel jPanel3;
    private javax.swing.JPanel jPanel4;
    private javax.swing.JSeparator jSeparator1;
    private javax.swing.JSeparator jSeparator10;
    private javax.swing.JSeparator jSeparator2;
    private javax.swing.JSeparator jSeparator3;
    private javax.swing.JSeparator jSeparator4;
    private javax.swing.JSeparator jSeparator5;
    private javax.swing.JSeparator jSeparator6;
    private javax.swing.JSeparator jSeparator7;
    private javax.swing.JSeparator jSeparator8;
    private javax.swing.JSeparator jSeparator9;
    private javax.swing.JLabel lbl_register;
    private javax.swing.JTextField lname;
    private javax.swing.JPasswordField pass_su;
    private javax.swing.JTextField postalcode;
    private javax.swing.JTextField provinceadd;
    private javax.swing.JTextField usrname;
    private javax.swing.JTextField visible_pass_su;
    // End of variables declaration//GEN-END:variables
}
