function handleChangeImage() {
  const image = $(this)[0].files[0];

  if (image) {
    const nextElement = $(this).next();
    $(nextElement).children().html("");
    $(nextElement)
      .children()
      .css("background-image", `url(${URL.createObjectURL(image)})`);
  }
}

$(".post_image").change(handleChangeImage);

let count = 0;

function createLabel(child, labelFor) {
  const label = document.createElement("label");
  label.setAttribute("for", labelFor);
  label.className = "col-sm-4 col-lg-3 col-form-label create-label";
  label.innerHTML = child;

  return label;
}

function createGroupInput(child) {
  const div = document.createElement("div");
  div.className = "col-sm-8 col-lg-9";
  div.appendChild(child);

  return div;
}

function createGroupRow(child) {
  const group = document.createElement("div");
  group.className = "form-group row";
  group.appendChild(child);

  return group;
}

function createInput(type, className, id, name) {
  const input = document.createElement("input");
  input.type = type;
  input.className = className;
  input.id = id;
  input.name = name;

  return input;
}

function createNewContent(index) {
  const content = document.createElement("div");
  content.className = "create-content__main";

  // title
  const idTitle = `post_title_child_${index}`;

  const title = createLabel("Title child:", idTitle);
  const groupTitle = createGroupRow(title);

  // input
  const inputTitle = createInput(
    "text",
    "form-control create-input",
    idTitle,
    "post_title_child"
  );

  const groupInputTitle = createGroupInput(inputTitle);
  groupTitle.appendChild(groupInputTitle);
  content.appendChild(groupTitle);

  // text
  const idText = `post_content_${index}`;

  const textTitle = createLabel("Paragraph:", idText);
  const groupText = createGroupRow(textTitle);

  // textarea
  const textarea = document.createElement("textarea");
  textarea.type = "text";
  textarea.className = "form-control create-input";
  textarea.id = idText;
  textarea.name = "post_content";
  textarea.rows = "10";

  const groupTextarea = createGroupInput(textarea);
  groupText.appendChild(groupTextarea);
  content.appendChild(groupText);

  // label image
  const idImage = `post_image_${index}`;

  const imageLabel = createLabel("Paragraph:", idImage);
  const groupImage = createGroupRow(imageLabel);

  // input image
  const inputImage = createInput("file", "post_image", idImage, "post_image");
  inputImage.setAttribute("hidden", "");
  inputImage.addEventListener("change", handleChangeImage);

  const groupImageInput = createGroupInput(inputImage);

  // review image
  const preview = document.createElement("div");
  preview.className = "preview-image";

  const targetInput = document.createElement("label");
  targetInput.setAttribute("for", idImage);
  targetInput.innerHTML = '<i class="fa-solid fa-image"></i> Choose Image';

  preview.appendChild(targetInput);
  groupImageInput.appendChild(preview);
  groupImage.appendChild(groupImageInput);
  content.appendChild(groupImage);

  return content;
}

$(".add-new i").click(() => {
  count++;
  const newContent = createNewContent(count);
  $(".create-content").append(newContent);
});

$(".create-form").on("submit", function (e) {
  e.preventDefault();
  console.log($(this));
});
