<form>
    <fieldset>
        <legend>Personal Information</legend>
        <input type="text" name="fName" placeholder="First Name"><br>
        <input type="text" name="lName" placeholder="Last Name"><br>
        <input type="email" name="email" placeholder="Email"><br>
        <input type="tel" name="phoneNumber" placeholder="Phone Number"><br>
        <input type="radio" name="gender" value="male" checked="checked"> Male
        <input type="radio" name="gender" value="female"> Female<br>
        Birth Date <br>
        <input type="date" name="date" ><br>
        Nationality <br>
        <select name="nationality">
            <option name="bg">Bulgarian</option>
            <option name="en">English</option>
        </select><br>
    </fieldset>

    <fieldset>
        <legend>Last Work Position</legend>
        Company Name: <input type="text" name="companyName" placeholder="Company Name"><br>
        From: <input type="date" name="fromDate"><br>
        To: <input type="date" name="toDate"><br>
    </fieldset>

    <fieldset>
        <legend>Computer Skills</legend>
        Computer languages:<br>

        <input type="text" name="compLanguages" placeholder="Computer Languages">
        <select name="level">
            <option name="beginner">Beginner</option>
            <option name="intermediate">Intermediate</option>
        </select><br>
        <input type="submit" name="removeLanguage_computerSkills" value="Remove Language">
        <button type="submit" name="addLanguage_computerSkills">Add Language</button>
    </fieldset>

    <fieldset>
        <legend>Other Skills</legend>
        Languages:<br>
        <input type="text" name="Languages" placeholder="Languages">
        <select name="comprehension">
            <option name="beginner">Beginner</option>
            <option name="intermediate">Intermediate</option>
        </select>
        <select name="reading">
            <option name="beginner">Beginner</option>
            <option name="intermediate">Intermediate</option>
        </select>
        <select name="Writing">
            <option name="beginner">Beginner</option>
            <option name="intermediate">Intermediate</option>
        </select><br>
        <input type="submit" name="removeLanguage" value="Remove Language">
        <input type="submit" name="addLanguage" value="Add Language"><br>
        Driver's License<br>
        <input type="checkbox" name="dr[]" value="B">B
        <input type="checkbox" name="dr[]" value="A">A
        <input type="checkbox" name="dr[]" value="C">C
    </fieldset>
    <input type="submit" name="generateCV" value="Generate CV">
</form>