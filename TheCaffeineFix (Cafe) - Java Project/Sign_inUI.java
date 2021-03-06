/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.thecaffeinefix;

import java.awt.HeadlessException;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import javax.swing.JLabel;
import javax.swing.JOptionPane;
import javax.swing.JPanel;
import javax.swing.JPasswordField;
import javax.swing.JSeparator;
import javax.swing.JTextField;

/**
 *
 * @author Mackson
 */
public class Sign_inUI extends javax.swing.JFrame {

    /**
     * Creates new form Sign_inUI
     */
    public Sign_inUI() {
        initComponents();
    }
    
    public boolean validation(){
        String username,password;
        username = username_si.getText();
        password = pass_si.getText();
        
      
        if(username.equals("")){
            JOptionPane.showMessageDialog(this,"PLEASE ENTER THE USERNAME");
            return false;
        }
        if(password.equals("")){
            JOptionPane.showMessageDialog(this,"PLEASE ENTER THE PASSWORD");
            return false;
        }
        return true;
    }

    public Sign_inUI(JLabel jLabel1, JLabel jLabel2, JLabel jLabel3, JLabel jLabel4, JLabel jLabel7, JPanel jPanel1, JPanel jPanel2, JPanel jPanel3, JPanel jPanel4, JPanel jPanel5, JSeparator jSeparator2, JSeparator jSeparator3, JLabel lbl_sign_in, JLabel lbl_sign_up, JPasswordField pass_si, JTextField username_si) throws HeadlessException {
        this.jLabel1 = jLabel1;
        this.jLabel2 = jLabel2;
        this.jLabel3 = jLabel3;
        this.jLabel4 = jLabel4;
        this.jLabel7 = jLabel7;
        this.jPanel1 = jPanel1;
        this.jPanel2 = jPanel2;
        this.jPanel3 = jPanel3;
        this.jPanel4 = jPanel4;
        this.jPanel5 = jPanel5;
        this.jSeparator2 = jSeparator2;
        this.jSeparator3 = jSeparator3;
        this.lbl_sign_in = lbl_sign_in;
        this.lbl_sign_up = lbl_sign_up;
        this.pass_si = pass_si;
        this.username_si = username_si;
    }
    
    public void verify(){
        String username=username_si.getText();
        String password=pass_si.getText();
        
        try 
        {
            Class.forName("com.mysql.jdbc.Driver");
            Connection con = DriverManager.getConnection("jdbc:mysql://localhost:3306/signup","root","root");
            java.sql.Statement st=con.createStatement();
            String sql= "select username,password from signupdata";
            ResultSet rs=st.executeQuery(sql);
            while(rs.next())
            {
                if(rs.getString(1).equals(username) && rs.getString(2).equals(password))
                {
                    new Main_UI().setVisible(true);
                    dispose();
                }
                else {
                    
                }
            }
        } 
        catch (Exception e) 
        {
            
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

        jSeparator1 = new javax.swing.JSeparator();
        jPanel2 = new javax.swing.JPanel();
        jPanel3 = new javax.swing.JPanel();
        jLabel3 = new javax.swing.JLabel();
        jLabel4 = new javax.swing.JLabel();
        jPanel4 = new javax.swing.JPanel();
        username_si = new javax.swing.JTextField();
        pass_si = new javax.swing.JPasswordField();
        jSeparator2 = new javax.swing.JSeparator();
        jSeparator3 = new javax.swing.JSeparator();
        jLabel1 = new javax.swing.JLabel();
        jLabel2 = new javax.swing.JLabel();
        jPanel1 = new javax.swing.JPanel();
        lbl_sign_in = new javax.swing.JLabel();
        jPanel5 = new javax.swing.JPanel();
        lbl_sign_up = new javax.swing.JLabel();
        jLabel7 = new javax.swing.JLabel();

        setDefaultCloseOperation(javax.swing.WindowConstants.DISPOSE_ON_CLOSE);
        setTitle("The Caffeine Fix");
        setUndecorated(true);

        jPanel3.setBackground(new java.awt.Color(233, 67, 71));

        jLabel3.setIcon(new javax.swing.ImageIcon(getClass().getResource("/com/thecaffeinefix/icons8-food-96 (1).png"))); // NOI18N

        jLabel4.setFont(new java.awt.Font("SansSerif", 1, 30)); // NOI18N
        jLabel4.setForeground(new java.awt.Color(248, 248, 248));
        jLabel4.setText("The Caffeine Fix");
        jLabel4.setHorizontalTextPosition(javax.swing.SwingConstants.LEADING);

        javax.swing.GroupLayout jPanel3Layout = new javax.swing.GroupLayout(jPanel3);
        jPanel3.setLayout(jPanel3Layout);
        jPanel3Layout.setHorizontalGroup(
            jPanel3Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel3Layout.createSequentialGroup()
                .addContainerGap()
                .addComponent(jLabel4, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                .addContainerGap())
            .addGroup(jPanel3Layout.createSequentialGroup()
                .addGap(71, 71, 71)
                .addComponent(jLabel3)
                .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
        );
        jPanel3Layout.setVerticalGroup(
            jPanel3Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel3Layout.createSequentialGroup()
                .addGap(139, 139, 139)
                .addComponent(jLabel3)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addComponent(jLabel4, javax.swing.GroupLayout.PREFERRED_SIZE, 47, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
        );

        jPanel4.setBackground(new java.awt.Color(16, 34, 63));
        jPanel4.setFont(new java.awt.Font("Segoe UI Symbol", 1, 24)); // NOI18N
        jPanel4.setLayout(new org.netbeans.lib.awtextra.AbsoluteLayout());

        username_si.setBackground(new java.awt.Color(16, 34, 63));
        username_si.setForeground(new java.awt.Color(248, 248, 248));
        username_si.setText("Username");
        username_si.setBorder(null);
        username_si.addFocusListener(new java.awt.event.FocusAdapter() {
            public void focusGained(java.awt.event.FocusEvent evt) {
                username_siFocusGained(evt);
            }
            public void focusLost(java.awt.event.FocusEvent evt) {
                username_siFocusLost(evt);
            }
        });
        username_si.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                username_siActionPerformed(evt);
            }
        });
        jPanel4.add(username_si, new org.netbeans.lib.awtextra.AbsoluteConstraints(120, 160, 245, 40));

        pass_si.setBackground(new java.awt.Color(16, 34, 63));
        pass_si.setForeground(new java.awt.Color(248, 248, 248));
        pass_si.setText("Password");
        pass_si.setBorder(null);
        pass_si.addFocusListener(new java.awt.event.FocusAdapter() {
            public void focusGained(java.awt.event.FocusEvent evt) {
                pass_siFocusGained(evt);
            }
            public void focusLost(java.awt.event.FocusEvent evt) {
                pass_siFocusLost(evt);
            }
        });
        jPanel4.add(pass_si, new org.netbeans.lib.awtextra.AbsoluteConstraints(120, 250, 245, 32));

        jSeparator2.setBackground(new java.awt.Color(233, 67, 71));
        jSeparator2.setForeground(new java.awt.Color(233, 67, 71));
        jPanel4.add(jSeparator2, new org.netbeans.lib.awtextra.AbsoluteConstraints(120, 210, 240, 20));

        jSeparator3.setBackground(new java.awt.Color(233, 67, 71));
        jSeparator3.setForeground(new java.awt.Color(233, 67, 71));
        jPanel4.add(jSeparator3, new org.netbeans.lib.awtextra.AbsoluteConstraints(120, 290, 240, 30));

        jLabel1.setIcon(new javax.swing.ImageIcon(getClass().getResource("/com/thecaffeinefix/icons8-password-32.png"))); // NOI18N
        jPanel4.add(jLabel1, new org.netbeans.lib.awtextra.AbsoluteConstraints(70, 250, 30, -1));

        jLabel2.setIcon(new javax.swing.ImageIcon(getClass().getResource("/com/thecaffeinefix/icons8-collaborator-male-32.png"))); // NOI18N
        jPanel4.add(jLabel2, new org.netbeans.lib.awtextra.AbsoluteConstraints(70, 170, 30, 30));

        jPanel1.setBackground(new java.awt.Color(16, 34, 63));
        jPanel1.setBorder(new javax.swing.border.SoftBevelBorder(javax.swing.border.BevelBorder.RAISED));

        lbl_sign_in.setForeground(new java.awt.Color(233, 67, 71));
        lbl_sign_in.setText("         Signi - In");
        lbl_sign_in.addMouseListener(new java.awt.event.MouseAdapter() {
            public void mouseClicked(java.awt.event.MouseEvent evt) {
                lbl_sign_inMouseClicked(evt);
            }
        });

        javax.swing.GroupLayout jPanel1Layout = new javax.swing.GroupLayout(jPanel1);
        jPanel1.setLayout(jPanel1Layout);
        jPanel1Layout.setHorizontalGroup(
            jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, jPanel1Layout.createSequentialGroup()
                .addGap(0, 0, Short.MAX_VALUE)
                .addComponent(lbl_sign_in, javax.swing.GroupLayout.PREFERRED_SIZE, 98, javax.swing.GroupLayout.PREFERRED_SIZE))
        );
        jPanel1Layout.setVerticalGroup(
            jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, jPanel1Layout.createSequentialGroup()
                .addGap(0, 0, Short.MAX_VALUE)
                .addComponent(lbl_sign_in, javax.swing.GroupLayout.PREFERRED_SIZE, 28, javax.swing.GroupLayout.PREFERRED_SIZE))
        );

        jPanel4.add(jPanel1, new org.netbeans.lib.awtextra.AbsoluteConstraints(120, 340, 100, 30));

        jPanel5.setBackground(new java.awt.Color(16, 34, 63));
        jPanel5.setBorder(new javax.swing.border.SoftBevelBorder(javax.swing.border.BevelBorder.RAISED));

        lbl_sign_up.setForeground(new java.awt.Color(233, 67, 71));
        lbl_sign_up.setText("        Sign - Up");
        lbl_sign_up.addMouseListener(new java.awt.event.MouseAdapter() {
            public void mouseClicked(java.awt.event.MouseEvent evt) {
                lbl_sign_upMouseClicked(evt);
            }
        });

        javax.swing.GroupLayout jPanel5Layout = new javax.swing.GroupLayout(jPanel5);
        jPanel5.setLayout(jPanel5Layout);
        jPanel5Layout.setHorizontalGroup(
            jPanel5Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, jPanel5Layout.createSequentialGroup()
                .addGap(0, 0, Short.MAX_VALUE)
                .addComponent(lbl_sign_up, javax.swing.GroupLayout.PREFERRED_SIZE, 100, javax.swing.GroupLayout.PREFERRED_SIZE))
        );
        jPanel5Layout.setVerticalGroup(
            jPanel5Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, jPanel5Layout.createSequentialGroup()
                .addGap(0, 0, Short.MAX_VALUE)
                .addComponent(lbl_sign_up, javax.swing.GroupLayout.PREFERRED_SIZE, 28, javax.swing.GroupLayout.PREFERRED_SIZE))
        );

        jPanel4.add(jPanel5, new org.netbeans.lib.awtextra.AbsoluteConstraints(260, 340, -1, 30));

        jLabel7.setFont(new java.awt.Font("Segoe UI Historic", 1, 24)); // NOI18N
        jLabel7.setForeground(new java.awt.Color(248, 248, 248));
        jLabel7.setText("  X");
        jLabel7.addMouseListener(new java.awt.event.MouseAdapter() {
            public void mouseClicked(java.awt.event.MouseEvent evt) {
                jLabel7MouseClicked(evt);
            }
        });
        jPanel4.add(jLabel7, new org.netbeans.lib.awtextra.AbsoluteConstraints(420, 0, 40, 30));

        javax.swing.GroupLayout jPanel2Layout = new javax.swing.GroupLayout(jPanel2);
        jPanel2.setLayout(jPanel2Layout);
        jPanel2Layout.setHorizontalGroup(
            jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel2Layout.createSequentialGroup()
                .addComponent(jPanel3, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(0, 0, Short.MAX_VALUE)
                .addComponent(jPanel4, javax.swing.GroupLayout.PREFERRED_SIZE, 462, javax.swing.GroupLayout.PREFERRED_SIZE))
        );
        jPanel2Layout.setVerticalGroup(
            jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(jPanel3, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
            .addComponent(jPanel4, javax.swing.GroupLayout.DEFAULT_SIZE, 456, Short.MAX_VALUE)
        );

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(jPanel2, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(jPanel2, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
        );

        pack();
        setLocationRelativeTo(null);
    }// </editor-fold>//GEN-END:initComponents

    private void username_siActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_username_siActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_username_siActionPerformed

    private void jLabel7MouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_jLabel7MouseClicked
        // TOP RIGHT 'X' EXIT CODE
        System.exit(0);
    }//GEN-LAST:event_jLabel7MouseClicked

    private void username_siFocusGained(java.awt.event.FocusEvent evt) {//GEN-FIRST:event_username_siFocusGained
        // USERNAME PLACEHOLDER
        if(username_si.getText().equals("Username"))
        {
        username_si.setText("");
        }
    }//GEN-LAST:event_username_siFocusGained

    private void pass_siFocusGained(java.awt.event.FocusEvent evt) {//GEN-FIRST:event_pass_siFocusGained
        // PASSWORD PLACEHOLDER
        if(pass_si.getText().equals("Password"))
        {
        pass_si.setText("");
        }
    }//GEN-LAST:event_pass_siFocusGained

    private void username_siFocusLost(java.awt.event.FocusEvent evt) {//GEN-FIRST:event_username_siFocusLost
        // USERNAME PLACEHOLDER
        if(username_si.getText().equals(""))
        {
        username_si.setText("Username");
        }
    }//GEN-LAST:event_username_siFocusLost

    private void pass_siFocusLost(java.awt.event.FocusEvent evt) {//GEN-FIRST:event_pass_siFocusLost
        // PASSWORD PLACEHOLDER
        if(pass_si.getText().equals(""))
        {
        pass_si.setText("Password");
        }
    }//GEN-LAST:event_pass_siFocusLost

    private void lbl_sign_inMouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_lbl_sign_inMouseClicked
        // MOVE TO MAIN PAGE
        if (validation()==true){
            verify();
        }
    }//GEN-LAST:event_lbl_sign_inMouseClicked

    private void lbl_sign_upMouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_lbl_sign_upMouseClicked
        // MOVE TO SIGN_UP PAGE
        
        new Sign_upUI().setVisible(true);
        dispose();
    }//GEN-LAST:event_lbl_sign_upMouseClicked

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
                if ("windows".equals(info.getName())) {
                    javax.swing.UIManager.setLookAndFeel(info.getClassName());
                    break;
                }
            }
        } catch (ClassNotFoundException ex) {
            java.util.logging.Logger.getLogger(Sign_inUI.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (InstantiationException ex) {
            java.util.logging.Logger.getLogger(Sign_inUI.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (IllegalAccessException ex) {
            java.util.logging.Logger.getLogger(Sign_inUI.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (javax.swing.UnsupportedLookAndFeelException ex) {
            java.util.logging.Logger.getLogger(Sign_inUI.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        }
        //</editor-fold>

        /* Create and display the form */
        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new Sign_inUI().setVisible(true);
            }
        });
    }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JLabel jLabel1;
    private javax.swing.JLabel jLabel2;
    private javax.swing.JLabel jLabel3;
    private javax.swing.JLabel jLabel4;
    private javax.swing.JLabel jLabel7;
    private javax.swing.JPanel jPanel1;
    private javax.swing.JPanel jPanel2;
    private javax.swing.JPanel jPanel3;
    private javax.swing.JPanel jPanel4;
    private javax.swing.JPanel jPanel5;
    private javax.swing.JSeparator jSeparator1;
    private javax.swing.JSeparator jSeparator2;
    private javax.swing.JSeparator jSeparator3;
    private javax.swing.JLabel lbl_sign_in;
    private javax.swing.JLabel lbl_sign_up;
    private javax.swing.JPasswordField pass_si;
    public javax.swing.JTextField username_si;
    // End of variables declaration//GEN-END:variables
}
