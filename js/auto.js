ccm_triggerSelectFileComplete = function(fID, af) { 

   console.log(fID);
   ccm_alGetFileData(fID, function(data) {
      crop = false;
      td.html('');
      dw = data[0].width;
      dh = data[0].height;
   });
}
