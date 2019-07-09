<%@ Page Language="C#" AutoEventWireup="true" CodeFile="login.aspx.cs" Inherits="_Default" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
</head>
<body>
    <form id="form1" runat="server">
        <div>
        <table>
        <tr>
        <td>Enter username: </td>
        <td><asp:TextBox ID="t1" runat="server"></asp:TextBox></td>
        </tr>

        <tr>
        <td>Enter password: </td>
        <td><asp:TextBox ID="t2" runat="server"></asp:TextBox></td>
        </tr>

        <tr>
        <td colspan="2" align="center">
            <asp:Button ID="Button1" runat="server" Text="Login" OnClick="Button1_Click" />
        </td>
        <tr>
        <td colspan="2" color="red">
            <asp:Label ID="label1" runat="server" Text=""></asp:Label>
        </td>
        </tr>
        </tr>
        </table>
        </div>
    </form>
</body>
</html>
