<!DOCTYPE html>
<html lang="en">
<head>

<link href="https://fonts.googleapis.com/css2?family=Arial:wght@400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Georgia:wght@400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family='Times New Roman':wght@400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family='Courier New':wght@400;700&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Georgia&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/docx@7.3.0/build/index.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mammoth/1.4.2/mammoth.browser.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Typifo - Smart Online Text Editor</title>
    <link rel="icon" type="image/x-icon" href="icon.png">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7fc;
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 260px;
            background: linear-gradient(135deg, #3b3f77, #1c1f47);
            color: #fff;
            display: flex;
            flex-direction: column;
            padding: 20px;
            position: fixed;
            height: 100vh;
            overflow-y: auto;
            border-right: 3px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }

        .sidebar h2 {
            font-size: 22px;
            text-align: center;
            margin-bottom: 5px;
            color: #ff4757;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .sidebar .section {
            margin-bottom: 20px;
        }

        .sidebar .section-title {
            font-size: 14px;
            color: #adb5bd;
            text-transform: uppercase;
            margin-bottom: 15px;
            padding-left: 5px;
            border-left: 3px solid #ff4757;
        }

        .sidebar button {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            padding: 10px 15px;
            background-color: rgba(255, 255, 255, 0.1);
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            margin-bottom: 10px;
            transition: all 0.3s ease;
            width: 100%;
            font-weight: bold;
            text-align: left;
        }

        .sidebar button:hover {
            background-color: #ff4757;
            color: white;
            transform: scale(1.05);
            box-shadow: 0 0 8px rgba(255, 71, 87, 0.6);
        }

        .sidebar button i {
            margin-right: 12px;
            font-size: 18px;
        }

        .sidebar select,
        .sidebar input[type="color"] {
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            font-size: 14px;
            border: none;
            border-radius: 8px;
            background-color: rgba(255, 255, 255, 0.1);
            color: black;
            text-align: center;
        }

        .sidebar select:focus,
        .sidebar input[type="color"]:focus {
            outline: none;
            box-shadow: 0 0 5px rgba(255, 71, 87, 0.8);
        }

        .sidebar .align-buttons {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
        }

        .editor-container {
            margin-left: 260px;
            padding: 20px;
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
        }
        .page {
    width: 210mm;
    height: 297mm; 
    background-color: white;
    padding: 20px;
    margin-bottom: 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    overflow: hidden; 
    position: relative;
}

.content {
    width: 100%;
    height: calc(100% - 40px); 
    overflow-y: auto;
    outline: none;
    font-size: 14px;
}


.ruler {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 20px;
    background-color: #f4f7fc;
    border-bottom: 1px solid #ddd;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 10;
}

.ruler-line {
    position: relative;
    width: 95%;
    height: 8px;
    background-color: #eaeaea;
    border-radius: 4px;
    overflow: hidden;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.ruler-line input[type="range"] {
    position: absolute;
    top: -6px;
    width: 100%;
    appearance: none;
    background: transparent;
    pointer-events: none; 
    z-index: 5;
}

.ruler-line input[type="range"]::-webkit-slider-thumb {
    appearance: none;
    height: 14px;
    width: 14px;
    background-color: #ff4757;
    border-radius: 50%;
    pointer-events: all; 
    cursor: pointer;
}

.ruler-line input[type="range"]::-moz-range-thumb {
    height: 14px;
    width: 14px;
    background-color: #ff4757;
    border-radius: 50%;
    cursor: pointer;
}
.create-table-button {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 8px;
    cursor: pointer;
    display: inline-block;
    width: 100%;
    text-align: center;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    font-family: 'Poppins', sans-serif;
    font-size: 16px;
    transition: background-color 0.3s, transform 0.3s;
}

.create-table-button h3 {
    margin: 0;
    font-size: 16px;
    color: white;
}

.create-table-button:hover {
    background-color: #45a049;
    transform: scale(1.05);
}

#tableControls {
    display: flex;
    flex-direction: column;
    gap: 10px;
    margin-top: 10px;
    font-family: 'Poppins', sans-serif;
}
.table-controls {
    display: flex;
    flex-direction: column;
    gap: 10px;
    background-color: #f4f7fc;
    padding: 10px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.table-controls label {
    font-size: 14px;
    font-weight: bold;
    color: #333;
}

.table-controls input {
    width: 80%;
    padding: 8px;
    font-size: 14px;
    text-align: center;
    border: 1px solid #ddd;
    border-radius: 4px;
    margin-left: 12px;
}

.create-button {
    background-color: #4CAF50;
    color: #ff4757;
    border: none;
    padding: 10px;
    border-radius: 8px;
    cursor: pointer;
    width: 100%;
    text-align: center;
    font-size: 16px;
    font-family: 'Poppins', sans-serif;
    transition: background-color 0.3s, transform 0.3s;
}

.create-button:hover {
    background-color: #45a049;
    transform: scale(1.05);
}

table td div {
    background-color: transparent;
    cursor: col-resize;
    user-select: none; 
}

table td {
    position: relative;
}

table {
    border-collapse: collapse;
    width: 100%;
}

table td {
    padding: 5px;
    border: 1px solid black;
}

.insert-image-button {
    background-color: #007BFF;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 8px;
    cursor: pointer;
    display: inline-block;
    width: 100%;
    text-align: center;
    font-family: 'Poppins', sans-serif;
    font-size: 16px;
    transition: background-color 0.3s, transform 0.3s;
}

.insert-image-button:hover {
    background-color: #0056b3;
    transform: scale(1.05);
}

.draggable-image {
    position: absolute;
    cursor: move;
    width: auto;
    max-width: 200px;
    border: 2px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.voice-service-icon {
    position: fixed;
    bottom: 20px;
    right: 20px;
    width: 50px;
    height: 50px;
    background-color: #FF5722;
    border: none;
    border-radius: 50%;
    cursor: pointer;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1000;
    transition: background-color 0.3s, transform 0.3s;
}

.voice-service-icon i {
    color: white;
    font-size: 24px;
}

.voice-service-icon.active {
    background-color: #4CAF50; 
}

.ai-popup {
    position: absolute;
    top: 20px;
    left: 20px;
    background: #ffffff;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
    border-radius: 8px;
    padding: 15px;
    z-index: 1000;
    width: 300px;
}

.ai-popup textarea {
    width: 100%;
    height: 80px;
    margin-bottom: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 10px;
    resize: none;
}

.ai-popup button {
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-right: 5px;
}

#aiSubmitButton {
    background: #4CAF50;
    color: white;
}

#aiCloseButton {
    background: #ff6b6b;
    color: white;
}

</style>
</head>
<body>
<div class="sidebar">
    <h2>قائمة التحرير</h2>

    <div class="section">
        <div class="section-title">إدارة الملفات</div>
        <button id="saveButton"><i class="fas fa-save"></i> حفظ</button>
        <button id="printButton"><i class="fas fa-print"></i> طباعة</button>

        <button id="saveAsPdfButton"><i class="fas fa-file-pdf"></i>حفظ  PDF</button>
        <button id="saveAsDocxButton"><i class="fas fa-file-word"></i> حفظ  DOCX</button>
        <input type="file" id="openDocxButton" accept=".docx" style="display: none;">
        <button id="uploadDocxButton"><i class="fas fa-file-upload"></i> فتح DOCX</button>

        <button onclick="window.location.href='dashboard.php'"><i class="fas fa-arrow-left"></i> العودة إلى لوحة التحكم</button>
    </div>

    <div class="section">
        <div class="section-title">تنسيق النصوص</div>
        <select id="fontFamily">
            <option value="">نوع الخط</option>
            <option value="Arial">Arial</option>
            <option value="Georgia">Georgia</option>
            <option value="Roboto">Roboto</option>
            <option value="'Times New Roman'">Times New Roman</option>
            <option value="'Courier New'">Courier New</option>
        </select>

        <select id="fontSize">
            <option value="">حجم الخط</option>
            <option value="8">8</option><option value="10">10</option><option value="12">12</option><option value="14">14</option><option value="16">16</option><option value="18">18</option><option value="20">20</option><option value="22">22</option><option value="24">24</option><option value="26">26</option><option value="28">28</option><option value="30">30</option><option value="32">32</option><option value="34">34</option><option value="36">36</option><option value="38">38</option><option value="40">40</option><option value="42">42</option><option value="44">44</option><option value="46">46</option><option value="48">48</option>        </select>
        <button id="boldButton"><i class="fas fa-bold"></i> غامق</button>
        <button id="italicButton"><i class="fas fa-italic"></i> مائل</button>
        <button id="underlineButton"><i class="fas fa-underline"></i> تحت السطر</button>
    </div>

    <div style="margin-bottom: 20px;">
        <button id="insertImageButton" class="insert-image-button">إدراج صورة</button>
        <input type="file" id="imageInput" accept="image/*" style="display: none;">
    </div>

    <input type="hidden" id="docId" value="fe2567cf-5849-4f14-ac88-7dd635dbaf3c">

    <div style="margin-bottom: 20px;">
        <button id="showTableControlsButton" class="create-table-button">
            <h3>إنشاء جدول</h3>
        </button>
        <div id="tableControls" style="display: none; margin-top: 10px;">
            <div class="table-controls">
                <label for="rowsInput">عدد الصفوف:</label>
                <input type="number" id="rowsInput" min="1" value="2">
                <label for="colsInput">عدد الأعمدة:</label>
                <input type="number" id="colsInput" min="1" value="2">
                <button id="createTableButton" class="create-button" style="background: #ff4757;">إنشاء</button>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="section-title">الألوان</div>
        <label for="textColor">لون النص</label>
        <input type="color" id="textColor" value="#000000">
        <label for="backgroundColor">لون الخلفية</label>
        <input type="color" id="backgroundColor" value="#ffffff">
    </div>

    <div class="section">
        <div class="section-title">محاذاة النصوص</div>
        <div class="align-buttons">
            <button id="alignLeft"><i class="fas fa-align-left"></i> يسار</button>
            <button id="alignCenter"><i class="fas fa-align-center"></i> وسط</button>
            <button id="alignRight"><i class="fas fa-align-right"></i> يمين</button>
            <button id="alignJustify"><i class="fas fa-align-justify"></i> ضبط النص</button>
        </div>
    </div>
</div>

<div class="editor-container">
    <div class="page">

        <div class="ruler">
            <div class="ruler-line">
                <input type="range" id="lineStart" min="0" max="210" value="0" title="بداية السطر">
                <input type="range" id="lineEnd" min="0" max="210" value="210" title="نهاية السطر">
            </div>
        </div>

        <div class="content" contenteditable="true"></div>

    </div>
</div>

<button id="voiceServiceButton" class="voice-service-icon">
    <i class="fas fa-microphone"></i>
</button>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/docx/7.3.0/docx.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script>

 const editor = document.querySelector('.content');
 function applyStyle(command, value = null) {
    document.execCommand(command, false, value);
}

 document.getElementById('boldButton').addEventListener('click', () => applyStyle('bold'));
document.getElementById('italicButton').addEventListener('click', () => applyStyle('italic'));
document.getElementById('underlineButton').addEventListener('click', () => applyStyle('underline'));
document.getElementById('alignLeft').addEventListener('click', () => applyStyle('justifyLeft'));
document.getElementById('alignCenter').addEventListener('click', () => applyStyle('justifyCenter'));
document.getElementById('alignRight').addEventListener('click', () => applyStyle('justifyRight'));
document.getElementById('alignJustify').addEventListener('click', () => applyStyle('justifyFull'));

 
document.getElementById('textColor').addEventListener('input', function () {
        document.execCommand('foreColor', false, this.value);
    });

 document.getElementById('backgroundColor').addEventListener('input', function () {
    const selection = window.getSelection();
    if (!selection.rangeCount) return;

    const range = selection.getRangeAt(0);
    const span = document.createElement('span');
    span.style.backgroundColor = this.value;
    range.surroundContents(span);
});
 

document.getElementById('fontFamily').addEventListener('change', function () {
    const fontFamily = this.value;

    if (!fontFamily) return;  

    const selection = window.getSelection();
    const editor = document.querySelector('.content');

    if (selection.rangeCount) {
        const range = selection.getRangeAt(0);

        if (!selection.isCollapsed) {
             const span = document.createElement('span');
            span.style.fontFamily = fontFamily;

             const extractedContents = range.extractContents();
            span.appendChild(extractedContents);

             range.insertNode(span);

             range.selectNode(span);
            selection.removeAllRanges();
            selection.addRange(range);
        } else {
             const span = document.createElement('span');
            span.style.fontFamily = fontFamily;
            span.textContent = '\u200B';  

             range.insertNode(span);

             range.setStart(span, 1);
            range.setEnd(span, 1);
            selection.removeAllRanges();
            selection.addRange(range);
        }
    }
});

document.querySelector('.content').addEventListener('input', () => {
    const spans = document.querySelectorAll('.content span');
    spans.forEach(span => {
        if (!span.style.fontFamily) {
            span.style.fontFamily = 'Times New Roman';  
        }
    });
});

 document.querySelector('.editor-container').addEventListener('input', function (event) {
    if (!event.target.classList.contains('content')) return;  
    const currentContent = event.target;
    const currentPage = currentContent.parentElement;  
    const pagesContainer = document.querySelector('.editor-container');
     if (currentContent.scrollHeight > currentPage.offsetHeight) {
         const newPage = document.createElement('div');
        newPage.className = 'page';

        const newContent = document.createElement('div');
        newContent.className = 'content';
        newContent.contentEditable = "true";

         newPage.appendChild(newContent);
        pagesContainer.appendChild(newPage);

         newPage.scrollIntoView({ behavior: 'smooth', block: 'start' });

         newContent.focus();
    }
});

document.getElementById('saveAsPdfButton').addEventListener('click', async () => {
    const { jsPDF } = window.jspdf;
    const pdf = new jsPDF('p', 'mm', 'a4');  
    const pages = document.querySelectorAll('.page');  
    const scaleFactor = 2;  
    const rulers = document.querySelectorAll('.ruler'); 

     rulers.forEach(ruler => {
        ruler.style.display = 'none';
    });

    for (let i = 0; i < pages.length; i++) {
        const canvas = await html2canvas(pages[i], { scale: scaleFactor });  
        const imgData = canvas.toDataURL('image/png');
        const imgWidth = 210;  
        const imgHeight = (canvas.height * imgWidth) / canvas.width;

        if (i === 0) {
             pdf.addImage(imgData, 'PNG', 0, 0, imgWidth, imgHeight);
        } else {
             pdf.addPage();
            pdf.addImage(imgData, 'PNG', 0, 0, imgWidth, imgHeight);
        }
    }

     rulers.forEach(ruler => {
        ruler.style.display = '';
    });

     pdf.save('document.pdf');
});

 document.getElementById('lineStart').addEventListener('input', function () {
    const content = document.querySelector('.content');
    content.style.marginLeft = `${this.value}mm`;
});

const content = document.querySelector('.content');
const lineStart = document.getElementById('lineStart');
const lineEnd = document.getElementById('lineEnd');
const totalWidth = 210;  

 lineStart.addEventListener('input', function () {
    content.style.marginLeft = `${this.value}mm`;
});

 lineEnd.addEventListener('input', function () {
    const maxWidth = this.value - lineStart.value;  
    content.style.maxWidth = `${maxWidth}mm`;  
});

 content.addEventListener('input', function () {
    const maxWidthPx = content.offsetWidth;  
    const textWidthPx = content.scrollWidth;  

     if (textWidthPx > maxWidthPx) {
        content.textContent = content.textContent.slice(0, -1);  
    }
});

document.getElementById('saveAsDocxButton').addEventListener('click', async () => {
    const { Document, Packer, Paragraph, TextRun } = window.docx;

     const content = document.querySelector('.content').innerHTML;

     const parser = new DOMParser();
    const parsedContent = parser.parseFromString(content, 'text/html').body;
    const textLines = parsedContent.innerText.split('\n');

    const paragraphs = textLines.map(line =>
        new Paragraph({
            children: [new TextRun(line)],
        })
    );

    const doc = new Document({
        sections: [
            {
                children: paragraphs,
            },
        ],
    });

    Packer.toBlob(doc).then(blob => {
        const link = document.createElement('a');
        link.href = URL.createObjectURL(blob);
        link.download = 'document.docx';
        link.click();
    }).catch(error => {
        console.error('Error generating DOCX:', error);
    });
});
document.getElementById('uploadDocxButton').addEventListener('click', () => {
    document.getElementById('openDocxButton').click();
});

document.getElementById('openDocxButton').addEventListener('change', async function () {
    const file = this.files[0];

    if (!file) return;

    const reader = new FileReader();

    reader.onload = function (event) {
        const arrayBuffer = event.target.result;

        mammoth
            .convertToHtml({ arrayBuffer })
            .then(result => {
                const content = document.querySelector('.content');
                content.innerHTML = result.value; 
            })
            .catch(err => {
                console.error('Error reading DOCX file:', err);
                alert('Failed to open DOCX file. Please try another file.');
            });
    };

    reader.readAsArrayBuffer(file); 
});

document.getElementById('fontSize').addEventListener('change', function () {
    const size = this.value;

    if (!size) return; 

    const selection = window.getSelection();
    const editor = document.querySelector('.content');

    if (selection.rangeCount) {
        const range = selection.getRangeAt(0);

        if (!selection.isCollapsed) {
            const span = document.createElement('span');
            span.style.fontSize = `${size}px`;

            const extractedContents = range.extractContents();
            span.appendChild(extractedContents);

            range.insertNode(span);

            range.selectNode(span);
            selection.removeAllRanges();
            selection.addRange(range);
        } else {
            const span = document.createElement('span');
            span.style.fontSize = `${size}px`;
            span.textContent = '\u200B'; 

            range.insertNode(span);

            range.setStart(span, 1);
            range.setEnd(span, 1);
            selection.removeAllRanges();
            selection.addRange(range);
        }
    }
});

document.getElementById('printButton').addEventListener('click', () => {
    const content = document.querySelector('.content').innerHTML;
    const printWindow = window.open('', '_blank');
    printWindow.document.open();

    printWindow.document.write(`
        <html>
        <head>
            <title>Print Document</title>
            <style>
                body {
                    font-family: 'Poppins', sans-serif;
                    margin: 0;
                    padding: 20px;
                }
                .content {
                    font-size: 14px;
                    line-height: 1.6;
                }
            </style>
        </head>
        <body>
            <div class="content">${content}</div>
        </body>
        </html>
    `);

    printWindow.document.close();
    printWindow.focus();

    printWindow.print();

    printWindow.onafterprint = () => printWindow.close();
});
document.getElementById('showTableControlsButton').addEventListener('click', () => {
    const controls = document.getElementById('tableControls');
    controls.style.display = controls.style.display === 'none' ? 'block' : 'none';
});

document.getElementById('createTableButton').addEventListener('click', () => {
    const rows = parseInt(document.getElementById('rowsInput').value, 10);
    const cols = parseInt(document.getElementById('colsInput').value, 10);

    if (isNaN(rows) || isNaN(cols) || rows <= 0 || cols <= 0) {
        alert('Please enter valid positive numbers for rows and columns.');
        return;
    }

    const table = document.createElement('table');
    table.style.borderCollapse = 'collapse';
    table.style.width = '100%';
    table.style.margin = '10px 0';

    for (let i = 0; i < rows; i++) {
        const row = document.createElement('tr');
        for (let j = 0; j < cols; j++) {
            const cell = document.createElement('td');
            cell.style.border = '1px solid #000';
            cell.style.padding = '5px';
            cell.style.textAlign = 'center';
            cell.contentEditable = 'true';
            cell.innerHTML = '&nbsp;';
            row.appendChild(cell);
        }
        table.appendChild(row);
    }
    const content = document.querySelector('.content');
    content.appendChild(table);

    makeTableResizable(table);

    document.getElementById('tableControls').style.display = 'none';
});
function makeTableResizable(table) {
    const rows = table.rows;

    for (let i = 0; i < rows[0].cells.length; i++) {
        const resizer = document.createElement('div');
        resizer.style.width = '5px';
        resizer.style.height = '100%';
        resizer.style.position = 'absolute';
        resizer.style.right = '0';
        resizer.style.top = '0';
        resizer.style.cursor = 'col-resize';
        resizer.style.backgroundColor = 'transparent';

        resizer.addEventListener('mousedown', initResize);

        rows[0].cells[i].appendChild(resizer);
        rows[0].cells[i].style.position = 'relative';  
    }
}

function initResize(e) {
    const cell = e.target.parentElement;
    const table = cell.closest('table');
    const startX = e.clientX;
    const startWidth = cell.offsetWidth;

    function resize(e) {
        const newWidth = startWidth + (
            e.clientX - startX);
        cell.style.width = `${newWidth}px`;
    }

    function stopResize() {
        document.removeEventListener('mousemove', resize);
        document.removeEventListener('mouseup', stopResize);
    }

    document.addEventListener('mousemove', resize);
    document.addEventListener('mouseup', stopResize);
}
 document.getElementById('insertImageButton').addEventListener('click', () => {
    document.getElementById('imageInput').click();
});

 document.getElementById('imageInput').addEventListener('change', function () {
    const file = this.files[0];
    if (!file) return;

    const reader = new FileReader();
    reader.onload = function (e) {
        const img = document.createElement('img');
        img.src = e.target.result;
        img.className = 'draggable-image';
        img.style.top = '100px'; 
        img.style.left = '100px'; 

        makeImageDraggable(img);

         document.querySelector('.content').appendChild(img);
    };
    reader.readAsDataURL(file);

     this.value = '';
});

 function makeImageDraggable(image) {
    let isDragging = false;
    let offsetX = 0;
    let offsetY = 0;

    image.addEventListener('mousedown', (e) => {
        isDragging = true;
        offsetX = e.clientX - image.offsetLeft;
        offsetY = e.clientY - image.offsetTop;

        image.style.opacity = '0.8';
        image.style.cursor = 'grabbing';
    });

    document.addEventListener('mousemove', (e) => {
        if (!isDragging) return;
        image.style.left = `${e.clientX - offsetX}px`;
        image.style.top = `${e.clientY - offsetY}px`;
    });

    document.addEventListener('mouseup', () => {
        if (!isDragging) return;
        isDragging = false;

        image.style.opacity = '1';
        image.style.cursor = 'move';
    });
}

let recognition;
let isListening = false;

if ('webkitSpeechRecognition' in window) {
    recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.interimResults = true;
    recognition.lang = 'ar-SA';

    recognition.onresult = (event) => {
        const contentEditable = document.querySelector('.content');
        let transcript = '';

        for (let i = event.resultIndex; i < event.results.length; i++) {
            const result = event.results[i];
            if (result.isFinal) {
                transcript += result[0].transcript.trim() + ' ';
            }
        }

        handleVoiceCommands(transcript.trim(), contentEditable);
    };

    recognition.onerror = (event) => {
        console.error('خطأ في التعرف على الصوت:', event.error);
    };
}

function handleVoiceCommands(command, contentEditable) {
    switch (command.toLowerCase()) {
        case 'نقطة':
            appendToContent(contentEditable, '،');  
            break;
        case 'مسافة':
            appendToContent(contentEditable, ' ');  
            break;
        case 'فاصلة':
            appendToContent(contentEditable, '،');  
            break;
        case 'علامة استفهام':
            appendToContent(contentEditable, '؟');  
            break;
        case 'علامة تعجب':
            appendToContent(contentEditable, '!');  
            break;
        case 'يساوي':
            appendToContent(contentEditable, '=');  
            break;
        case 'حذف':
            deleteLastWord(contentEditable);
            break;
        case 'رجوع للسطر':
            appendToContent(contentEditable, '<br>');  
            break;
        default:
            appendToContent(contentEditable, command);  
    }
}

function appendToContent(contentEditable, text) {
    contentEditable.innerHTML += text;
    moveCursorToEnd(contentEditable);
}

function deleteLastWord(contentEditable) {
    const text = contentEditable.innerText.trim();
    const words = text.split(' ');
    words.pop(); 
    contentEditable.innerText = words.join(' ') + ' ';
    moveCursorToEnd(contentEditable);
}

function moveCursorToEnd(contentEditable) {
    const range = document.createRange();
    range.selectNodeContents(contentEditable);
    range.collapse(false);
    const selection = window.getSelection();
    selection.removeAllRanges();
    selection.addRange(range);
}

document.getElementById('voiceServiceButton').addEventListener('click', () => {
    const button = document.getElementById('voiceServiceButton');
    if (isListening) {
        recognition.stop();
        isListening = false;
        button.classList.remove('active');
    } else {
        recognition.start();
        isListening = true;
        button.classList.add('active');
    }
});


 





 







document.addEventListener('DOMContentLoaded', () => {
    const aiPopup = document.getElementById('aiPopup');
    const aiInput = document.getElementById('aiInput');
    const aiSubmitButton = document.getElementById('aiSubmitButton');
    const aiCloseButton = document.getElementById('aiCloseButton');

    // Show AI popup on page click
    document.querySelector('.content').addEventListener('click', (event) => {
        const x = event.clientX;
        const y = event.clientY;

        aiPopup.style.left = `${x}px`;
        aiPopup.style.top = `${y}px`;
        aiPopup.style.display = 'block';
    });

    // Close the popup
    aiCloseButton.addEventListener('click', () => {
        aiPopup.style.display = 'none';
    });

    // Handle AI query submission
    aiSubmitButton.addEventListener('click', async () => {
        const query = aiInput.value.trim();
        if (!query) return alert('Please enter a query.');

        try {
            const response = await fetch('/generate-text', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ query }),
            });

            const data = await response.json();
            document.querySelector('.content').innerHTML += `<p>${data.text}</p>`;
        } catch (error) {
            console.error('Error fetching AI response:', error);
            alert('Failed to generate text. Please try again.');
        }

        // Close the popup
        aiPopup.style.display = 'none';
        aiInput.value = '';
    });
});

 





document.addEventListener('DOMContentLoaded', () => {
    const editorContent = document.querySelector('.content');
    const saveButton = document.getElementById('saveButton');
    const docId = document.getElementById('docId').value; 

    if (docId) {
        const savedDoc = JSON.parse(localStorage.getItem(`document_${docId}`));
        if (savedDoc) {
            editorContent.innerHTML = savedDoc.content || '';
        }
    } else {
        console.error('Document ID is missing.');
    }

    saveButton.addEventListener('click', () => {
        const content = editorContent.innerHTML;
        if (docId) {
            localStorage.setItem(`document_${docId}`, JSON.stringify({ id: docId, content }));
            alert('Document saved successfully!');
        } else {
            alert('Error: Document ID is missing.');
        }
    });
});



setInterval(() => {
    const content = document.querySelector('.content').innerHTML;
    if (docId) {
        localStorage.setItem(`document_${docId}`, JSON.stringify({ id: docId, content }));
    }
}, 5000); 


</script>
</body>
</html>
