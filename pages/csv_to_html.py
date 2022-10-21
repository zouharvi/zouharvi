import csv

with open("pages/publications.csv", "r") as f:
    data = list(csv.reader(f))

for title, authors, link_name, link_href in data:
    print("<tr>")
    print(f"    <td>{title}<br>")
    print('    <span style="font-style: italic; font-size: small;">')
    print("       ", authors.replace("Vilém Zouhar", "<u>Vilém Zouhar</u>"))
    print('    </span></td>')

    if link_href:
        print(f'<td><a href="{link_href}">{link_name}</a></td>')
    else:
        print(f'<td style="font-style: italic;">{link_name}</td>')
    print("</tr>")