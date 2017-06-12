<form method="get">
    <table>
        <td>
            First Name:<br>
            <input type="text" name="firstName1" placeholder="First Name"><br>
            <input type="text" name="firstName2" placeholder="First Name"><br>
            <input type="text" name="firstName3" placeholder="First Name"><br>
        </td>
        <td>
            Second Name:<br>
            <input type="text" name="secondName1" placeholder="Second Name"> <br>
            <input type="text" name="secondName2" placeholder="Second Name"><br>
            <input type="text" name="secondName3" placeholder="Second Name"><br>
        </td>
        <td>
            Email:<br>
            <input type="email" name="email1" placeholder="Email"> <br>
            <input type="email" name="email2" placeholder="Email"><br>
            <input type="email" name="email3" placeholder="Email"><br>
        </td>
        <td>
            Exam score:<br>
            <input type="number" name="score1"> <br>
            <input type="number" name="score2"><br>
            <input type="number" name="score3"><br>
        </td>
    </table>
    Sort by:
    <select name="sort">
        <option value="fName">First name</option>
        <option value="sName">Second name</option>
        <option value="email">Email</option>
        <option value="eScore">Exam score</option>
    </select>
    Order:
    <select name="order">
        <option value="asc">Ascending</option>
        <option value="dsc">Descending</option>
    </select>
    <input type="submit" name="submit" value="Submit">

</form><br>