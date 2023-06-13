<!DOCTYPE html>
<html>
<head>
	<title></title>
    <style>
        .container {
  position: relative;
  overflow:auto;
  width: 100%;
  padding-top: 56.25%; /* 16:9 Aspect Ratio (divide 9 by 16 = 0.5625) */
}

/* Then style the iframe to fit in the container div with full height and width */
.responsive {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  width: 100%;
  height: 100%;
}
    </style>
</head>
<body>


	<iframe height="720px" class="responsive" width="1280px" src="{{ Storage::url($items->file_buku) }}"></iframe>

</body>
</html>

