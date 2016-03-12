import java.sql.*;
public class connect_msaccess
{
public static void main(String[] args)
{
int i;
Connection conn = null;
// register jdbc driver
try{
Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
} catch(ClassNotFoundException e) {
System.out.println(e);
}
// connect to DB
try{
conn = DriverManager.getConnection("jdbc:odbc:team");
} catch(SQLException se) {
System.out.println(se);
}
System.out.println("connection is successful!!!");
try{
String selectSQL = "select *from team";
Statement stmt = conn.createStatement();
ResultSet rset = stmt.executeQuery(selectSQL);
while(rset.next()){
System.out.println("ID: " + rset.getString(1) + " NAME: " +
rset.getString(2) + " ADDRESS:" +
rset.getString(3));
}
stmt.close();
} catch(SQLException se) {
System.out.println(se);
}
}
}